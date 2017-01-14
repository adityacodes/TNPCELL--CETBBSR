<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notice;
use Session, Auth, View;
use App\TNP;

class MainNoticeController extends Controller
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
        //create a variable and store all the notices in it
        $notices = Notice::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('notices.index')->withNotices($notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
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
                'notice_subject' => 'required|unique:notices',
                'notice_message' => 'required',
            ));
        //2. Store in the DB
        $notice = new Notice;

        $notice->notice_subject = $request->notice_subject;
        $notice->notice_message = $request->notice_message;

        $notice->save();

        //3. Redirect to another page
        Session::flash('success', 'The notice was successfully saved.');

        return redirect()->route('admin.mainnotices.show', $notice->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);
        return view('notices.show')->withNotice($notice);
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
        $notice = Notice::find($id);
        //return the view and pass in the var we previously created
        return view('notices.edit')->withNotice($notice);
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
        
        $notice = Notice::find($id);

        
        $this->validate($request, array(
            'notice_subject' => 'required',
            'notice_message' => 'required',
        ));
        

        //save the data
        $notice->notice_subject = $request->notice_subject;
        $notice->notice_message = $request->notice_message;

        $notice->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Notice was successfully updated');
        //redirect the users

        return redirect()->route('admin.mainnotices.show', $notice->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();

        Session::flash('Success', 'Notice Deleted Successfully');

        return redirect()->route('admin.mainnotices.index');
    }
}
