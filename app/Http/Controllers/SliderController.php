<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider, File, Validator;
use Auth, View, App\TNP, Session;

class SliderController extends Controller
{
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
         
        //create a variable and store all the sliders in it
        $sliders = Slider::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('sliders.index')->withSliders($sliders); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders.create');
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
                'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        if ($validator->fails()) {
            return redirect('admin/slider/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->file('slider_image')->isValid()) 
        {
            // Image::make($request->slider_image->getRealPath())->resize(200, 200)->save($path);
            $imageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->file('slider_image')->move(public_path('uploads/slider'), $imageName);  
        }
        else {
              Session::flash('warning', 'Uploaded file is not valid');
              return back()->withErrors($validator)->withInput();
        }

        $slider = new Slider;
        $slider->slider_image = $imageName;
        $slider->save();

        //3. Redirect to another page
        Session::flash('success', 'The slider was successfully saved.');

        return redirect()->route('admin.slider.show', $slider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $slider = Slider::find($id);
        return view('sliders.show')->withSlider($slider);
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
        $slider = Slider::find($id);
        //return the view and pass in the var we previously created
        return view('sliders.edit')->withSlider($slider);
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
        
        $slider = Slider::find($id);

        
        $this->validate($request, array(
                'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        

        if ($request->file('slider_image')->isValid()) 
        {
            File::delete('uploads/slider/'.$slider->slider_image);
            $imageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->file('slider_image')->move(public_path('uploads/slider'), $imageName);
              
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
          return redirect('admin/slider/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $slider->slider_image = $imageName;
        $slider->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Slider was successfully updated');
        //redirect the users

        return redirect()->route('admin.slider.show', $slider->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $slider = Slider::find($id);
        File::delete('uploads/slider/'.$slider->slider_image);
        $slider->delete();

        Session::flash('Success', 'Slider Deleted Successfully');

        return redirect()->route('admin.slider.index');
    }
}
