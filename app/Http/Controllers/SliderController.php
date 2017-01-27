<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider;
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
        
        //1. validate the date
        // $this->validate($request, array(
        //         'slider_image' => 'required',
        //     ));
        //2. Store in the DB
        $slider = new Slider;

        // $slider->slider_image = $request->slider_image;

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
            'slider_image' => 'required',
        ));
        

        //save the data
        $slider->slider_image = $request->slider_image;

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
        $slider->delete();

        Session::flash('Success', 'Slider Deleted Successfully');

        return redirect()->route('admin.slider.index');
    }
}
