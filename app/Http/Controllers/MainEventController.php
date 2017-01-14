<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Session, Auth, View;
use App\TNP;

class MainEventController extends Controller
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
        //create a variable and store all the events in it
        $events = Event::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
                'event_subject' => 'required|unique:events',
                'event_message' => 'required',
            ));
        //2. Store in the DB
        $event = new Event;

        $event->event_subject = $request->event_subject;
        $event->event_message = $request->event_message;

        $event->save();

        //3. Redirect to another page
        Session::flash('success', 'The event was successfully saved.');

        return redirect()->route('admin.mainevents.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = event::find($id);
        return view('events.show')->withEvent($event);
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
        $event = event::find($id);
        //return the view and pass in the var we previously created
        return view('events.edit')->withEvent($event);
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
        
        $event = event::find($id);

        
        $this->validate($request, array(
            'event_subject' => 'required',
            'event_message' => 'required',
        ));
        

        //save the data
        $event->event_subject = $request->event_subject;
        $event->event_message = $request->event_message;

        $event->save();
        // set flash meessage to be shown

        Session::flash('success', 'The event was successfully updated');
        //redirect the users

        return redirect()->route('admin.mainevents.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::find($id);
        $event->delete();

        Session::flash('Success', 'event Deleted Successfully');

        return redirect()->route('admin.mainevents.index');
    }
}
