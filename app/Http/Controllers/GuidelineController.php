<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guideline;
use Session, Auth, View;
use App\TNP;

class GuidelineController extends Controller
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
        //create a variable and store all the guidelines in it
        $guidelines = Guideline::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('guidelines.index')->withguidelines($guidelines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guidelines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. validate the date
        $this->validate($request, array(
                'guideline_subject' => 'required|unique:guidelines',
                'guideline_message' => 'required',
            ));
        //2. Store in the DB
        $guideline = new Guideline;

        $guideline->guideline_subject = $request->guideline_subject;
        $guideline->guideline_message = $request->guideline_message;

        $guideline->save();

        //3. Redirect to another page
        Session::flash('success', 'The guideline was successfully saved.');

        return redirect()->route('admin.guideline.show', $guideline->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guideline = Guideline::find($id);
        return view('guidelines.show')->withguideline($guideline);
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
        $guideline = Guideline::find($id);
        //return the view and pass in the var we previously created
        return view('guidelines.edit')->withguideline($guideline);
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
        
        $guideline = Guideline::find($id);

        
        $this->validate($request, array(
            'guideline_subject' => 'required',
            'guideline_message' => 'required',
        ));
        

        //save the data
        $guideline->guideline_subject = $request->guideline_subject;
        $guideline->guideline_message = $request->guideline_message;

        $guideline->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Guideline was successfully updated');
        //redirect the users

        return redirect()->route('admin.guideline.show', $guideline->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guideline = Guideline::find($id);
        $guideline->delete();

        Session::flash('Success', 'Guideline Deleted Successfully');

        return redirect()->route('admin.guideline.index');
    }
}
