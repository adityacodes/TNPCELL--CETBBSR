<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TNP;
use App\Test, Session, Auth, View;
use App\Branch, Validator;

class TestTNPController extends Controller
{
    private $uploadPath = 'uploads/test';

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
        $tests = Test::orderBy('id', 'desc')->paginate(10);

        //return a view and pass in the above variabe
        return view('tests.index')->with('tests', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::lists('name', 'name');
        return view('tests.create')->withBranches($branches);
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

        $test = new Test;
              $test->name  = $request->name;
              $test->regdno = $request->regdno;
              $test->branch = $request->branch;
              $test->dob = $request->dob;
              $test->gender  = $request->gender;

              $test->tenthyear = $request->tenthyear;
              $test->tenthpercent = $request->tenthpercent;
              $test->tenthboard  = $request->tenthboard;

              if(!empty($request->diplomayear)){
                //Diploma request
                    $test->diplomayear = $request->diplomayear;
                    $test->diplomapercent = $request->diplomapercent;
                    $test->diplomaboard = $request->diplomaboard;
                    $test->twelthyear = " ";
                    $test->twelthpercent = " ";
                    $test->twelthboard = " ";
                }
              else{
                //Twelth request
                  $test->diplomayear = " ";
                  $test->diplomapercent = " ";
                  $test->diplomaboard = " ";
                  $test->twelthyear = $request->twelthyear;
                  $test->twelthpercent = $request->twelthpercent;
                  $test->twelthboard = $request->twelthboard;
              }
              $test->isdiplomastudent = 1;
              $test->cgpa = $request->cgpa;
              $test->backlog = $request->backlog;
              $test->paddress = $request->paddress;
              $test->praddress = $request->praddress;
              $test->fname = $request->fname;
              $test->foccupation =  $request->foccupation;
              $test->mname = $request->mname;
              $test->moccupation  =  $request->moccupation;

              if(empty($request->rname)){
                  $test->rname = " ";
                  $test->roccupation  = " ";
              }
              else{
                $test->rname = $request->rname;
                $test->roccupation  =   $request->roccupation;
              }
              $test->internships  = $request->internships;
              $test->email = $request->email;

              $test->save();

               Session::flash('success', 'The Test user was successfully saved.');

            return redirect()->route('admin.test.show', $test->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);
        return view('tests.show')->with('test',$test);
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
        $test = Test::find($id);
        $branches = Branch::lists('name', 'name');
        //return the view and pass in the var we previously created
        return view('tests.edit')->with('test',$test)->withBranches($branches);
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

        $test = Test::find($id);
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

              $test->name  = $request->name;
              $test->regdno = $request->regdno;
              $test->branch = $request->branch;
              $test->dob = $request->dob;
              $test->gender  = $request->gender;

              $test->tenthyear = $request->tenthyear;
              $test->tenthpercent = $request->tenthpercent;
              $test->tenthboard  = $request->tenthboard;

              if(!empty($request->diplomayear)){
                //Diploma request
                    $test->diplomayear = $request->diplomayear;
                    $test->diplomapercent = $request->diplomapercent;
                    $test->diplomaboard = $request->diplomaboard;
                    $test->twelthyear = " ";
                    $test->twelthpercent = " ";
                    $test->twelthboard = " ";
                }
              else{
                //Twelth request
                  $test->diplomayear = " ";
                  $test->diplomapercent = " ";
                  $test->diplomaboard = " ";
                  $test->twelthyear = $request->twelthyear;
                  $test->twelthpercent = $request->twelthpercent;
                  $test->twelthboard = $request->twelthboard;
              }
              
              $test->cgpa = $request->cgpa;
              $test->backlog = $request->backlog;
              $test->paddress = $request->paddress;
              $test->praddress = $request->praddress;
              $test->fname = $request->fname;
              $test->foccupation =  $request->foccupation;
              $test->mname = $request->mname;
              $test->moccupation  =  $request->moccupation;

              if(empty($request->rname)){
                  $test->rname = " ";
                  $test->roccupation  = " ";
              }
              else{
                $test->rname = $request->rname;
                $test->roccupation  =   $request->roccupation;
              }
              $test->internships  = $request->internships;
              $test->email = $request->email;

              $test->save();

              Session::flash('success', 'The Test user was successfully updated');
                //redirect the users

                return redirect()->route('admin.test.show', $test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();

        Session::flash('Success', 'Test user Deleted Successfully');

        return redirect()->route('admin.test.index');
    }

    public function migrate($id)
    {
        $test = Test::find($id);

        $tnp = new TNP;
        $tnp->name  = $test->name;
        $tnp->regdno = $test->regdno;
        $tnp->branch = $test->branch;
        $tnp->dob = $test->dob;
        $tnp->gender  = $test->gender;

        $tnp->tenthyear = $test->tenthyear;
        $tnp->tenthpercent = $test->tenthpercent;
        $tnp->tenthboard  = $test->tenthboard;

        if($test->isdiplomastudent){
          //Diploma test
              $tnp->diplomayear = $test->diplomayear;
              $tnp->diplomapercent = $test->diplomapercent;
              $tnp->diplomaboard = $test->diplomaboard;
              $tnp->twelthyear = " ";
              $tnp->twelthpercent = " ";
              $tnp->twelthboard = " ";
          }
        else{
          //Twelth test
            $tnp->diplomayear = " ";
            $tnp->diplomapercent = " ";
            $tnp->diplomaboard = " ";
            $tnp->twelthyear = $test->twelthyear;
            $tnp->twelthpercent = $test->twelthpercent;
            $tnp->twelthboard = $test->twelthboard;
        }
        
        $tnp->cgpa = $test->cgpa;
        $tnp->backlog = $test->backlog;
        $tnp->paddress = $test->paddress;
        $tnp->praddress = $test->praddress;
        $tnp->fname = $test->fname;
        $tnp->foccupation =  $test->foccupation;
        $tnp->mname = $test->mname;
        $tnp->moccupation  =  $test->moccupation;

        if(empty($test->rname)){
            $tnp->rname = " ";
            $tnp->roccupation  = " ";
        }
        else{
          $tnp->rname = $test->rname;
          $tnp->roccupation  = $test->roccupation;
        }
        $tnp->internships  = $test->internships;
        $tnp->email = $test->email;

        $tnp->save();

         Session::flash('success', 'The TNP user was successfully saved.');

    }
}
