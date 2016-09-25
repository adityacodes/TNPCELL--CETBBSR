<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\TNP, Auth, Session;
use App\Applied;
use View, Validator;
use DB, Excel;
use App\User;
use App\Branch;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('ajax', ['only' => ['applicants']]);
        $this->middleware('superadmin', ['only' => ['delUser','getImportDatabase','getAddBranch']]);

        if(Auth::check()){
                $user = TNP::where('regdno', '=', Auth::user()->name)->first();
                View::share('user', $user);
        }
    }

    public function getIndex()
    {
    	$tnpuser = TNP::where('regdno', '=', Auth::user()->name)->first();
    	return view('admin.index')->withTNP($tnpuser);
    }

    /**
     * Publish the post.
     *
     * @param  int  $id
     * @return Response
     */
    public function publish($id)
    {
        $post = Post::find($id);
        $post->published = 1;

        $post->save();
        Session::flash('success', 'The post was successfully published');

        return redirect()->route('admin.post.index');
    }

    /**
     * UnPublish the post.
     *
     * @param  int  $id
     * @return Response
     */
    public function unpublish($id)
    {
        $post = Post::find($id);
        $post->published = 0;

        $post->save();

        Session::flash('warning', 'The post was successfully unpublished');
        return redirect()->route('admin.post.index');
    }

    /**
     * Posts available.
     *
     */
    public function applicantposts()
    {
        $posts = DB::table('posts')->select('id','title')->get();
        //return a view and pass in the above variabe
        return view('admin.applicants')->with('posts',$posts);
        //return view('admin.applicants')->withPosts($posts);
    }

     /**
     * Applicants
     *
     * @param  int  $postid
     */
    public function applicants(Request $request)
    {
        if(isset($request->postid))
        {
             $apps = Applied::join('users', 'users.id', '=', 'applieds.userid')
                        ->select('name')->where('postid', '=', $request->postid)->get();

            foreach ($apps as $app) {
                
                $applicants[] = TNP::where('regdno', '=', $app->name)->first();
            }

            static $x = 1;
            if(count($applicants)<=10)
            {  
              for( $i=0; $i<count($applicants); $i++)
              {
                  echo '<tr><td>'.$x.'</td><td>'.$applicants[$i]->regdno.'</td><td>'.$applicants[$i]->name.'</td></tr>';
                  $x++;
              }
            }
            else{
                for( $i=0; $i<10; $i++)
                  {
                      echo '<tr><td>'.$x.'</td><td>'.$applicants[$i]->regdno.'</td><td>'.$applicants[$i]->name.'</td></tr>';

                      $x++;
                  }
                  echo '<tr><td>'.$x.'</td><td>PLEASE EXPORT THE FILE</td><td>TO SEE MORE</td></tr>';
            }
        }
    }

    public function administrators(){
        //$regdnos[] = DB::table('users')->where('admin', '=' , '1')->where('id','<>' ,Auth::user()->id)->value('name');
        $regdnos = DB::table('users')->where('admin', '=' , '1')->get();
        $name = array();
        foreach ($regdnos as $regdno) {
            $name[] =  DB::table('t_n_p_s')->where('regdno', '=', $regdno->name)->first();
        }
        
        return view('admin.administrators')->with('name',$name);
    }


    public function admindelete($regdno){

        $regdno = User::where('name', '=' , $regdno)->first();

        if(Auth::user()->isSuperAdmin()){
            Session::flash('warning', 'You cannot remove a superadmin.'); 
        }
        else{
            $regdno->admin = 0;
            $regdno->save();
            Session::flash('success', 'You have successfully removed an admin.');
        }

        return redirect()->route('admin.administrators');
    }
    public function checktnpuser(Request $request){

      //add value to a cookie. check via javascript if cookie is set the only allow to proceed.

    }
    public function addtnpuser(Request $request){
        //check existence has been passed ... ready to add to database
        $this->validate($request, array(
        'title' => 'required|max:255',

        ));

        $tnpuser = new TNP;
        $tnpuser->name = $request->name;
        $tnpuser->regdno = $request->regdno;
        $tnpuser->branch = $request->branch;
        $tnpuser->dob = $request->dob;
        $tnpuser->gender = $request->gender;
        $tnpuser->tenthyear = $request->tenthyear;
        $tnpuser->tenthpercent = $request->tenthpercent;
        $tnpuser->tenthboard = $request->tenthboard;


        $tnpuser->twelthyear = $request->twelthyear;
        $tnpuser->twelthpercent = $request->twelthpercent;
        $tnpuser->twelthboard = $request->twelthboard;


        $tnpuser->diplomayear = $request->diplomayear;
        $tnpuser->diplomapercent = $request->diplomapercent;
        $tnpuser->diplomaboard = $request->diplomaboard;

        $tnpuser->cgpa = $request->cgpa;
        $tnpuser->backlog = $request->backlog;
        


    }
    public function edittnpuser(Request $request)
    {
      $regdno = TNP::where('regdno', '=', $request->regdno);

    }

    public function makeadmin(Request $request){

        $regdno = User::where('name', '=' , $request->regdno)->first();
        if(!$regdno){
            Session::flash('success', 'The registration number is not found in our database.');
            return redirect()->route('admin.administrators');
        }

        if($regdno->admin == 1){
            Session::flash('success', 'The student is already in the placement coordinator list.');
            return redirect()->route('admin.administrators');
        }

        $regdno->admin = 1;
        $regdno->save();

        Session::flash('success', 'You have successfully added a placement coordinator.');
        return redirect()->route('admin.administrators');
    }

    public function excel($postid)
    {

      $studentsArray[] = ['ID','NAME','REGDNO','DOB','GENDER','TENTH YEAR','TENTH PERCENT','TENTH BOARD','TWELTH YEAR','TWELTH PERCENT','TWELTH BOARD','DIPLOMA YEAR','DIPLOMA PERCENT','DIPLOMA BOARD','CGPA','ACTIVE BACKLOG','PRESENT ADDRESS','PERMANENT ADDRESS','FATHER NAME','FATHER OCCUPATION','MOTHER NAME',' MOTHER OCCUPATION','RELATIVE NAME','RELATIVE OCCUPATION','INTERNSHIPS','EMAIL'];

      $applicants= [];

      // Quering database in a chunk of 100 so that it doesnot get much pressure
      
      //$apps = Applied::join('users', 'users.id', '=', 'applieds.userid')->select('name')->where('postid', '=', $postid)->get();

        Applied::join('users', 'users.id', '=', 'applieds.userid')->select('name')->where('postid', '=', $postid)->chunk(100, function($apps) use ( &$applicants){
                    
                    foreach ($apps as $app) {
                        $applicants[] = DB::table('t_n_p_s')->where('regdno', '=', $app->name)->first();
                    }

              });

        foreach($applicants as $applicant){
                $studentsArray[] = array_merge((array)$applicant);
           }
        

        Excel::create('Filename', function($excel) use ($studentsArray) {

                // Set the title
                $excel->setTitle('Our new awesome title');

                // Chain the setters
                $excel->setCreator('Aditya')
                      ->setCompany('CETB-TNP');
                // Call them separately
                $excel->setDescription('A demonstration to change the file properties');

                $excel->sheet('POST', function($sheet) use ($studentsArray) {
                        $sheet->fromArray($studentsArray, null, 'A1', false, false);
                });

            })->export('xlsx');

    }

    public function showstandalone()
    {
      
      return view('admin.standalone');
    }

    public function standalone(Request $request)
    {

      //foreach students in TNP Cell check their values with requested value
        
        $studentsArray = [];

       $studentsArray[] = ['ID','NAME','REGDNO','BRANCH','DOB','GENDER','TENTH YEAR','TENTH PERCENT','TENTH BOARD','TWELTH YEAR','TWELTH PERCENT','TWELTH BOARD','DIPLOMA YEAR','DIPLOMA PERCENT','DIPLOMA BOARD','CGPA','ACTIVE BACKLOG','PRESENT ADDRESS','PERMANENT ADDRESS','FATHER NAME','FATHER OCCUPATION','MOTHER NAME',' MOTHER OCCUPATION','RELATIVE NAME','RELATIVE OCCUPATION','INTERNSHIPS','EMAIL'];

        DB::table('t_n_p_s')->orderBy('id')->chunk(100, function($students) use ($request, &$studentsArray)
          {
            // using "&"  in studentsarray makes it possible to change the variable from an anonymous function. 
                  foreach($students as $student)
                  {
                      if(empty($student->diplomapercent) &&
                        floatval($student->tenthyear) >= floatval($request->tenthyear) &&
                          floatval($student->tenthpercent) >= floatval($request->tenthpercent) &&
                          floatval($student->twelthyear) >= floatval($request->twelthyear) &&
                          floatval($student->twelthpercent) >= floatval($request->twelthpercent) &&
                          floatval($student->cgpa) >= floatval($request->cgpa) &&
                          floatval($student->backlog) <= floatval($request->backlog))
                      {
                          //Twelth Student is eligible
                         $studentsArray[] = array_merge((array)$student);
  
                      }
                      elseif(empty($student->twelthpercent) &&
                        floatval($student->tenthyear) >= floatval($request->tenthyear) &&
                          floatval($student->tenthpercent) >= floatval($request->tenthpercent) &&
                          floatval($student->diplomayear) >= floatval($request->diplomayear) &&
                          floatval($student->diplomapercent) >= floatval($request->diplomapercent) &&
                          floatval($student->cgpa) >= floatval($request->cgpa) &&
                          floatval($student->backlog) <= floatval($request->backlog))
                      {
                          // Diploma Student is eligible
                          
                             $studentsArray[] = array_merge((array)$student);
                          
                      }

                  }// End of foreach loop
          });

          Excel::create('cetbtnp', function($excel) use ($studentsArray) {

                // Set the title
                $excel->setTitle('TNP-CELL');

                // Chain the setters
                $excel->setCreator('PLACEMENT COORDINATOR')
                      ->setCompany('CETB-TNP');
                // Call them separately
                $excel->setDescription('STANDALONE MODE');

                $excel->sheet('POST', function($sheet) use ($studentsArray) {
                        $sheet->fromArray($studentsArray, null, 'A1', false, false);
                });

            })->export('xlsx');
    }

    public function delUser(){
        return view('admin.deluser');
    }

    public function deleteUser(Request $request)
    {
      //Delete All Users
         if(isset($request->delall))
         {
            //Delete in a chunk of hundred after truncating the applieds table.
         } 

        //Delete single user
         if(isset($request->singleuserregdno))
         {
            $user = User::where('name', '=', $request->singleuserregdno)->first();

            if(!empty($user)){
              $applied = Applied::where('userid', '=', $user->id)->delete();

                $user->delete();
                Session::flash('success', 'Deleted the user successfully.');
                return redirect()->route('admin.post.index');
            }
            else{
              Session::flash('warning', 'No such user found.');
              return redirect()->route('admin.post.index');
            }
         }
    }

    public function getsendMail(){
      $branches = Branch::all();
      return view('admin.sendemail')->withBranches($branches);
    }

    public function sendMail(Request $request){

        //Collect a chunk of 100 and send them email
        $subject = $request->subject;

        DB::table('t_n_p_s')->where('branch', '=', $request->branch)->chunk(100, function($students){

            foreach ($students as $student) {
              Mail::send('email.groupmail', ['body' => $body, 'regdno' => $student->regdno, 'name' => $student->name], function($message) use ($student, $subject) {
                    $message->from('admin@cetbtnp.com', 'CETB-TNP');
                    $message->to($student->email, $student->name)->subject($subject);
                });   
            }
        });

    }

    public function getImportDatabase(){
        return view('admin.import');
    }

    public function postImportDatabase(Request $request){
          $students = Excel::load($request->file)->all();
          $branches = Branch::select('name')->get();
          $x = [];
          foreach ($branches as $branch) {
             array_push($x,$branch->name);
          }

          foreach ($students as $student) {
            if(in_array($student->branch, $x)){
                continue;
            }
            else{
              Session::flash('success', 'Student named -" '.$student->name.' " failed branch constraint restriction in the excel sheet . Please check the file again.');
              return redirect()->route('admin.import');
            }
          }
          foreach ($students as $student){
              //add each to database.
            
            $tnpuser = TNP::where('regdno', '=', $student->regdno);

            if($tnpuser){
                break;
            }
      $tnp = new TNP;

              $tnp->name  = $student->name;
              $tnp->regdno = $student->regdno;
              $tnp->branch = $student->branch;
              $tnp->dob = $student->dob;
              $tnp->gender  = $student->gender;

              $tnp->tenthyear = $student->tenth_year;
              $tnp->tenthpercent = $student->tenth_percent;
              $tnp->tenthboard  = $student->tenth_board;

              if(!empty($student->diploma_year)){
                //Diploma student
                    $tnp->diplomayear = $student->diploma_year;
                    $tnp->diplomapercent = $student->diploma_percent;
                    $tnp->diplomaboard = $student->diploma_board;
                    $tnp->twelthyear = " ";
                    $tnp->twelthpercent = " ";
                    $tnp->twelthboard = " ";
                }
              else{
                //Twelth Student
                  $tnp->diplomayear = " ";
                  $tnp->diplomapercent = " ";
                  $tnp->diplomaboard = " ";
                  $tnp->twelthyear = $student->twelth_year;
                  $tnp->twelthpercent = $student->twelth_percent;
                  $tnp->twelthboard = $student->twelth_board;
              }
              
              $tnp->cgpa = $student->cgpa;
              $tnp->backlog = $student->active_backlog;
              $tnp->paddress = $student->permanent_address;
              $tnp->praddress = $student->present_address;
              $tnp->fname = $student->father_name;
              $tnp->foccupation =  $student->father_occupation;
              $tnp->mname = $student->mother_name;
              $tnp->moccupation  =  $student->mother_occupation;

              if(empty($student->relative_name)){
                  $tnp->rname = " ";
                  $tnp->roccupation  = " ";
              }
              else{
                $tnp->rname = $student->relative_name;
                $tnp->roccupation  =   $student->relative_occupation;
              }
              $tnp->internships  = $student->internships;
              $tnp->email = $student->email;
              $tnp->timestamps = false;

              $tnp->save();
          }
          
          Session::flash('success', 'The students were successfully added to database');
          return redirect()->route('admin.import');
    }

    #add branches
    #getaddbranch
    #postaddbranch

    public function getAddBranch(){

    }

    public function postAddBranch(){

    }




}
