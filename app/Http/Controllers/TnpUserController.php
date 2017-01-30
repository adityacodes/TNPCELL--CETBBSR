<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TNP, App\Branch;
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
        $branches = Branch::lists('name', 'name');
        return view('tnpuser.create')->withBranches($branches);
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
                'name'=> 'required',
                'regdno'=> 'required',
                'branch'=> 'required',
                'dob'=> 'required',
                'gender'=> 'required',
                'tenthyear'=> 'required',
                'tenthpercent'=> 'required',
                'tenthboard'=> 'required',
                'cgpa'=> 'required',
                'backlog'=> 'required',
                'paddress'=> 'required',
                'praddress'=> 'required',
                'fname'=> 'required',
                'foccupation'=> 'required',
                'mname'=> 'required',
                'moccupation'=> 'required',
                'rname'=> 'sometimes|required',
                'roccupation'=> 'sometimes|required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return back()
                        ->withErrors($validator)
                        ->withInput();
          }

        $tnp = new TNP;
              $tnp->name  = $request->name;
              $tnp->regdno = $request->regdno;
              $tnp->branch = $request->branch;
              $tnp->dob = $request->dob;
              $tnp->gender  = $request->gender;

              $tnp->tenthyear = $request->tenthyear;
              $tnp->tenthpercent = $request->tenthpercent;
              $tnp->tenthboard  = $request->tenthboard;

              if(!empty($request->diplomayear)){
                //Diploma request
                    $tnp->diplomayear = $request->diplomayear;
                    $tnp->diplomapercent = $request->diplomapercent;
                    $tnp->diplomaboard = $request->diplomaboard;
                    $tnp->twelthyear = " ";
                    $tnp->twelthpercent = " ";
                    $tnp->twelthboard = " ";
                }
              else{
                //Twelth request
                  $tnp->diplomayear = " ";
                  $tnp->diplomapercent = " ";
                  $tnp->diplomaboard = " ";
                  $tnp->twelthyear = $request->twelthyear;
                  $tnp->twelthpercent = $request->twelthpercent;
                  $tnp->twelthboard = $request->twelthboard;
              }
              
              $tnp->cgpa = $request->cgpa;
              $tnp->backlog = $request->backlog;
              $tnp->paddress = $request->paddress;
              $tnp->praddress = $request->praddress;
              $tnp->fname = $request->fname;
              $tnp->foccupation =  $request->foccupation;
              $tnp->mname = $request->mname;
              $tnp->moccupation  =  $request->moccupation;

              if(empty($request->rname)){
                  $tnp->rname = " ";
                  $tnp->roccupation  = " ";
              }
              else{
                $tnp->rname = $request->rname;
                $tnp->roccupation  =   $request->roccupation;
              }
              $tnp->internships  = $request->internships;
              $tnp->email = $request->email;

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
        $branches = Branch::lists('name', 'name');
        //return the view and pass in the var we previously created
        return view('tnpuser.edit')->with('tnpuser',$tnpuser)->withBranches($branches);
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
                'name'=> 'required',
                'regdno'=> 'required',
                'branch'=> 'required',
                'dob'=> 'required',
                'gender'=> 'required',
                'tenthyear'=> 'required',
                'tenthpercent'=> 'required',
                'tenthboard'=> 'required',
                'cgpa'=> 'required',
                'backlog'=> 'required',
                'paddress'=> 'required',
                'praddress'=> 'required',
                'fname'=> 'required',
                'foccupation'=> 'required',
                'mname'=> 'required',
                'moccupation'=> 'required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return back()
                        ->withErrors($validator)
                        ->withInput();
          }

              $tnp->name  = $request->name;
              $tnp->regdno = $request->regdno;
              $tnp->branch = $request->branch;
              $tnp->dob = $request->dob;
              $tnp->gender  = $request->gender;

              $tnp->tenthyear = $request->tenthyear;
              $tnp->tenthpercent = $request->tenthpercent;
              $tnp->tenthboard  = $request->tenthboard;

              if(!empty($request->diplomayear)){
                //Diploma request
                    $tnp->diplomayear = $request->diplomayear;
                    $tnp->diplomapercent = $request->diplomapercent;
                    $tnp->diplomaboard = $request->diplomaboard;
                    $tnp->twelthyear = " ";
                    $tnp->twelthpercent = " ";
                    $tnp->twelthboard = " ";
                }
              else{
                //Twelth request
                  $tnp->diplomayear = " ";
                  $tnp->diplomapercent = " ";
                  $tnp->diplomaboard = " ";
                  $tnp->twelthyear = $request->twelthyear;
                  $tnp->twelthpercent = $request->twelthpercent;
                  $tnp->twelthboard = $request->twelthboard;
              }
              
              $tnp->cgpa = $request->cgpa;
              $tnp->backlog = $request->backlog;
              $tnp->paddress = $request->paddress;
              $tnp->praddress = $request->praddress;
              $tnp->fname = $request->fname;
              $tnp->foccupation =  $request->foccupation;
              $tnp->mname = $request->mname;
              $tnp->moccupation  =  $request->moccupation;

              if(empty($request->rname)){
                  $tnp->rname = " ";
                  $tnp->roccupation  = " ";
              }
              else{
                $tnp->rname = $request->rname;
                $tnp->roccupation  =   $request->roccupation;
              }
              $tnp->internships  = $request->internships;
              $tnp->email = $request->email;

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
