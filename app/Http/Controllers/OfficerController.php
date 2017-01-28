<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Officer;
use Session, Auth, View, Validator, File;
use App\TNP;

class OfficerController extends Controller
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
        $officers = Officer::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('officers.index')->withOfficers($officers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officers.create');
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
        $validator = Validator::make($request->all(), [
                'officer_name' => 'required|max:255',
                'officer_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'officer_desig'=> 'required',
                'officer_website'=> 'required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect('admin/officer/create')
                        ->withErrors($validator)
                        ->withInput();
          }

        if ($request->file('officer_image')->isValid()) {

            $imageName = time().'.'.$request->officer_image->getClientOriginalExtension();
            $request->officer_image->move('uploads/officer', $imageName);
              
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
          return redirect('admin/officer/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //2. Store in the DB
        $officer = new Officer;

        $officer->officer_name = $request->officer_name;
        $officer->officer_image = $imageName;
        $officer->officer_desig = $request->officer_desig;
        $officer->officer_website = $request->officer_website;
        $officer->creator = Auth::user()->name;

        $officer->save();

        //3. Redirect to another page
        Session::flash('success', 'The alum was successfully saved.');

        return redirect()->route('admin.officer.show', $officer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officer = Officer::find($id);
        return view('officers.show')->withOfficer($officer);
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
        $officer = Officer::find($id);
        //return the view and pass in the var we previously created
        return view('officers.edit')->withOfficer($officer);
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
        $officer = officer::find($id);

        
        $this->validate($request, array(
                'officer_name' => 'required|max:255',
                'officer_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'officer_desig'=> 'required',
                'officer_website'=> 'required',
        ));
        
        if ($request->file('officer_image')->isValid()) {
            File::delete('uploads/officer/'.$officer->officer_image);
            $imageName = time().'.'.$request->officer_image->getClientOriginalExtension();
            $request->officer_image->move('uploads/officer', $imageName);
            $officer->officer_image = $imageName;  
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
             return  back()
                        ->withErrors($validator)
                        ->withInput();
        }

        //save the data

        $officer->officer_name = $request->officer_name;
        
        $officer->officer_desig = $request->officer_desig;
        $officer->officer_website = $request->officer_website;
        $officer->creator = Auth::user()->name;
        
        $officer->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Officer was successfully updated');
        //redirect the users

        return redirect()->route('admin.officer.show', $officer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $officer = Officer::find($id);
        File::delete('uploads/officer/'.$officer->officer_image);
        $officer->delete();

        Session::flash('Success', 'Officer Deleted Successfully');

        
        return redirect()->route('admin.officer.index');
    }
}
