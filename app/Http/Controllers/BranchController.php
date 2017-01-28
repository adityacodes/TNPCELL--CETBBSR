<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Branch;
use Session, Auth, View;
use App\TNP;

class BranchController extends Controller
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
        //create a variable and store all the branches in it
        $branches = Branch::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('branches.index')->withBranches($branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
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
                'id' => 'required|unique:branches',
                'name' => 'required',
                'fullname' => 'required',
            ));
        //2. Store in the DB
        $branch = new Branch;

        $branch->id = $request->id;
        $branch->name = $request->name;
        $branch->fullname = $request->fullname;
        $branch->save();

        //3. Redirect to another page
        Session::flash('success', 'The branch was successfully saved.');

        return redirect()->route('admin.branches.show', $branch->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);
        return view('branches.show')->withBranch($branch);
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
        $branch = Branch::find($id);
        //return the view and pass in the var we previously created
        return view('branches.edit')->withBranch($branch);
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
        
        $branch = Branch::find($id);

        
        //1. validate the date
        $this->validate($request, array(
                'id' => 'required',
                'name' => 'required',
                'fullname' => 'required',
            ));
        

        //save the data
        $branch->id = $request->id;
        $branch->name = $request->name;
        $branch->fullname = $request->fullname;
        $branch->timestamps = false;
        $branch->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Branch was successfully updated');
        //redirect the users

        return redirect()->route('admin.branches.show', $branch->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        $branch->delete();

        Session::flash('Success', 'Branch Deleted Successfully');

        return redirect()->route('admin.branches.index');
    }
}
