<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fest, File, Validator;
use Auth, View, App\TNP, Session;

class FestController extends Controller
{

    private $uploadPath = 'uploads/fest';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('superadmin');

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

        $fests = Fest::orderBy('id', 'desc')->paginate(5);
        return view('fests.index')->withFests($fests); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), array(
                'fest_name' => 'required',
                'fest_website' => 'required',
                'fest_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        if ($validator->fails()) {
            return redirect('admin/fest/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->file('fest_image')->isValid()) 
        {
            // Image::make($request->fest_image->getRealPath())->resize(200, 200)->save($path);
            $imageName = time().'.'.$request->fest_image->getClientOriginalExtension();
            $request->fest_image->move($this->uploadPath, $imageName);  
        }
        else {
              Session::flash('warning', 'Uploaded file is not valid');
              return back()->withErrors($validator)->withInput();
        }

        $fest = new Fest;
        $fest->fest_name = $request->fest_name;
        $fest->fest_website = $request->fest_website;
        $fest->fest_image = $imageName;
        $fest->save();

        //3. Redirect to another page
        Session::flash('success', 'The fest was successfully saved.');

        return redirect()->route('admin.fest.show', $fest->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $fest = Fest::find($id);
        return view('fests.show')->withfest($fest);
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
        $fest = Fest::find($id);
        //return the view and pass in the var we previously created
        return view('fests.edit')->withfest($fest);
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
        
        $fest = Fest::find($id);

        
        $this->validate($request, array(
                'fest_name' => 'required',
                'fest_website' => 'required',
                'fest_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        

        if ($request->file('fest_image')->isValid()) 
        {
            File::delete($this->uploadPath.'/'.$fest->fest_image);
            $imageName = time().'.'.$request->fest_image->getClientOriginalExtension();
            $request->fest_image->move($this->uploadPath, $imageName);
              
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
          return redirect('admin/fest/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $fest->fest_name = $request->fest_name;
        $fest->fest_website = $request->fest_website;
        $fest->fest_image = $imageName;
        $fest->save();
        // set flash meessage to be shown

        Session::flash('success', 'The fest was successfully updated');
        //redirect the users

        return redirect()->route('admin.fest.show', $fest->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $fest = Fest::find($id);
        File::delete($this->uploadPath.'/'.$fest->fest_image);
        $fest->delete();

        Session::flash('Success', 'fest Deleted Successfully');

        return redirect()->route('admin.fest.index');
    }
}
