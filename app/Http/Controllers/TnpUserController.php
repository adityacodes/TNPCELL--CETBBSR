<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TNP;
use Auth, View, Session, Validator;

class TnpUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

        if(Auth::check()){
                $user = TNP::where('regdno', '=', Auth::user()->name)->first();
                View::share('user', $user);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the blog posts in it
        $tnpusers = TNP::orderBy('id', 'desc')->paginate(10);

        //return a view and pass in the above variabe
        return view('tnpuser.index')->with('tnpusers', $tnpusers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tnpuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
                'alumni_name' => 'required|max:25',
                'alumni_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'alumni_desig'=> 'required',
                'alumni_company' => 'required',
                'alumni_website'=> 'required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect('admin/alumni/create')
                        ->withErrors($validator)
                        ->withInput();
          }

        $tnp = new TNP;
              $tnp->name  = $request->name;
              $tnp->regdno = $request->regdno;
              $tnp->branch = $request->branch;
              $tnp->dob = $request->dob;
              $tnp->gender  = $request->gender;

              $tnp->tenthyear = $request->tenth_year;
              $tnp->tenthpercent = $request->tenth_percent;
              $tnp->tenthboard  = $request->tenth_board;

              if(!empty($request->diploma_year)){
                //Diploma request
                    $tnp->diplomayear = $request->diploma_year;
                    $tnp->diplomapercent = $request->diploma_percent;
                    $tnp->diplomaboard = $request->diploma_board;
                    $tnp->twelthyear = " ";
                    $tnp->twelthpercent = " ";
                    $tnp->twelthboard = " ";
                }
              else{
                //Twelth request
                  $tnp->diplomayear = " ";
                  $tnp->diplomapercent = " ";
                  $tnp->diplomaboard = " ";
                  $tnp->twelthyear = $request->twelth_year;
                  $tnp->twelthpercent = $request->twelth_percent;
                  $tnp->twelthboard = $request->twelth_board;
              }
              
              $tnp->cgpa = $request->cgpa;
              $tnp->backlog = $request->active_backlog;
              $tnp->paddress = $request->permanent_address;
              $tnp->praddress = $request->present_address;
              $tnp->fname = $request->father_name;
              $tnp->foccupation =  $request->father_occupation;
              $tnp->mname = $request->mother_name;
              $tnp->moccupation  =  $request->mother_occupation;

              if(empty($request->relative_name)){
                  $tnp->rname = " ";
                  $tnp->roccupation  = " ";
              }
              else{
                $tnp->rname = $request->relative_name;
                $tnp->roccupation  =   $request->relative_occupation;
              }
              $tnp->internships  = $request->internships;
              $tnp->email = $request->email;
              $tnp->timestamps = false;

              $tnp->save();

               Session::flash('success', 'The TNP user was successfully saved.');

            return redirect()->route('admin.tnpuser.show', $tnp->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tnpuser = TNP::find($id);
        return view('tnpuser.show')->with('tnpuser',$tnpuser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db ans save as a var
        $tnpuser = TNP::find($id);
        //return the view and pass in the var we previously created
        return view('tnpuser.edit')->with('tnpuser',$tnpuser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tnp = TNP::find($id);
         $validator = Validator::make($request->all(), [
                'alumni_name' => 'required|max:25',
                'alumni_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'alumni_desig'=> 'required',
                'alumni_company' => 'required',
                'alumni_website'=> 'required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect('admin/alumni/create')
                        ->withErrors($validator)
                        ->withInput();
          }

              $tnp->name  = $request->name;
              $tnp->regdno = $request->regdno;
              $tnp->branch = $request->branch;
              $tnp->dob = $request->dob;
              $tnp->gender  = $request->gender;

              $tnp->tenthyear = $request->tenth_year;
              $tnp->tenthpercent = $request->tenth_percent;
              $tnp->tenthboard  = $request->tenth_board;

              if(!empty($request->diploma_year)){
                //Diploma request
                    $tnp->diplomayear = $request->diploma_year;
                    $tnp->diplomapercent = $request->diploma_percent;
                    $tnp->diplomaboard = $request->diploma_board;
                    $tnp->twelthyear = " ";
                    $tnp->twelthpercent = " ";
                    $tnp->twelthboard = " ";
                }
              else{
                //Twelth request
                  $tnp->diplomayear = " ";
                  $tnp->diplomapercent = " ";
                  $tnp->diplomaboard = " ";
                  $tnp->twelthyear = $request->twelth_year;
                  $tnp->twelthpercent = $request->twelth_percent;
                  $tnp->twelthboard = $request->twelth_board;
              }
              
              $tnp->cgpa = $request->cgpa;
              $tnp->backlog = $request->active_backlog;
              $tnp->paddress = $request->permanent_address;
              $tnp->praddress = $request->present_address;
              $tnp->fname = $request->father_name;
              $tnp->foccupation =  $request->father_occupation;
              $tnp->mname = $request->mother_name;
              $tnp->moccupation  =  $request->mother_occupation;

              if(empty($request->relative_name)){
                  $tnp->rname = " ";
                  $tnp->roccupation  = " ";
              }
              else{
                $tnp->rname = $request->relative_name;
                $tnp->roccupation  =   $request->relative_occupation;
              }
              $tnp->internships  = $request->internships;
              $tnp->email = $request->email;
              $tnp->timestamps = false;

              $tnp->save();

              Session::flash('success', 'The TNP user was successfully updated');
                //redirect the users

                return redirect()->route('admin.tnpuser.show', $tnp->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tnpuser = TNP::find($id);
        $tnpuser->delete();

        Session::flash('Success', 'TNP user Deleted Successfully');

        return redirect()->route('admin.tnpuser.index');
    }
}
