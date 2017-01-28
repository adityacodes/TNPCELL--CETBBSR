<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Alumni;
use Session, Auth, View, Validator;
use App\Input;
use App\TNP, File;

class AlumniController extends Controller
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
        $alumnis = Alumni::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('alumnis.index')->withAlumnis($alumnis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnis.create');
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
                'alumni_name' => 'required|max:255',
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

        if ($request->file('alumni_image')->isValid()) {

            $imageName = time().'.'.$request->file('alumni_image')->getClientOriginalExtension();
            $request->file('alumni_image')->move(public_path('uploads/alumni'), $imageName);
              
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
          return redirect('admin/alumni/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //2. Store in the DB
        $alumni = new Alumni;

        $alumni->alumni_name = $request->alumni_name;
        $alumni->alumni_image = $imageName;
        $alumni->alumni_desig = $request->alumni_desig;
        $alumni->alumni_company = $request->alumni_company; 
        $alumni->alumni_website = $request->alumni_website;
        $alumni->creator = Auth::user()->name;

        $alumni->save();

        //3. Redirect to another page
        Session::flash('success', 'The alum was successfully saved.');

        return redirect()->route('admin.alumni.show', $alumni->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni = Alumni::find($id);
        return view('alumnis.show')->withAlumni($alumni);
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
        $alumni = Alumni::find($id);
        //return the view and pass in the var we previously created
        return view('alumnis.edit')->withAlumni($alumni);
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
        $alumni = Alumni::find($id);

        
        $this->validate($request, array(
                'alumni_name' => 'required|max:255',
                'alumni_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'alumni_desig'=> 'required',
                'alumni_company' => 'required',
                'alumni_website'=> 'required',
        ));
        
        if($request->hasfile('alumni_image'))
        {
            if($request->file('alumni_image')->isValid())
            {
                File::delete('uploads/alumni/'.$alumni->alumni_image);
                $imageName = time().'.'.$request->file('alumni_image')->getClientOriginalExtension();
                $request->file('alumni_image')->move(public_path('uploads/alumni'), $imageName);
                $alumni->alumni_image = $imageName;
            }
            else{     
              // sending back with error message.
              Session::flash('warning', 'Uploaded file is not valid');
              return redirect('admin/alumni/create')
                            ->withErrors($validator)
                            ->withInput();
            }

        }

        $alumni->alumni_name = $request->alumni_name;
        $alumni->alumni_desig = $request->alumni_desig;
        $alumni->alumni_company = $request->alumni_company; 
        $alumni->alumni_website = $request->alumni_website;
        $alumni->creator = Auth::user()->name;
        
        $alumni->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Alum was successfully updated');
        //redirect the users

        return redirect()->route('admin.alumni.show', $alumni->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $alumni = Alumni::find($id);
        File::delete('uploads/alumni/'.$alumni->alumni_image);
        $alumni->delete();

        Session::flash('Success', 'Alum Deleted Successfully');

        return redirect()->route('admin.alumni.index');
    }
}
