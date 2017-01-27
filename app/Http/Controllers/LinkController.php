<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth,View, Session, App\TNP;
use App\Link;

class LinkController extends Controller
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
        
        //create a variable and store all the links in it
        $links = Link::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('links.index')->withLinks($links); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
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
                'link_href' => 'required|unique:links',
                'link_target' => 'required',
                'link_name' => 'required',
                'link_isfooter' => 'required|boolean',
                'link_isheader' => 'required|boolean',
                'link_isfirstquicklink' => 'required|boolean',
                'link_issecondquicklink' => 'required|boolean',
                'link_isaddresslink' => 'required|boolean',
            ));
        //2. Store in the DB
        $link = new Link;

        $link->link_href = $request->link_href;
        $link->link_target = $request->link_target;
        $link->link_name = $request->link_name;
        $link->link_isfooter = $request->link_isfooter;
        $link->link_isheader = $request->link_isheader;
        $link->link_isfirstquicklink = $request->link_isfirstquicklink;
        $link->link_issecondquicklink = $request->link_issecondquicklink;
        $link->link_isaddresslink = $request->link_isaddresslink;


        $link->save();

        //3. Redirect to another page
        Session::flash('success', 'The link was successfully saved.');

        return redirect()->route('admin.link.show', $link->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Link::find($id);
        return view('links.show')->withLink($link);
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
        $link = Link::find($id);
        //return the view and pass in the var we previously created
        return view('links.edit')->withLink($link);
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
        
        $link = Link::find($id);

         
        
        $this->validate($request, array(
                'link_href' => 'required',
                'link_target' => 'required',
                'link_name' => 'required',
                'link_isfooter' => 'required|boolean',
                'link_isheader' => 'required|boolean',
                'link_isfirstquicklink' => 'required|boolean',
                'link_issecondquicklink' => 'required|boolean',
                'link_isaddresslink' => 'required|boolean',
            ));
        
        if($link->link_href != $request->link_href){
                $this->validate($request, array(
                    'link_href' => 'unique:links,link_href',
                ));
        }  

        //save the data
        $link->link_href = $request->link_href;
        $link->link_target = $request->link_target;
        $link->link_name = $request->link_name;
        $link->link_isfooter = $request->link_isfooter;
        $link->link_isheader = $request->link_isheader;
        $link->link_isfirstquicklink = $request->link_isfirstquicklink;
        $link->link_issecondquicklink = $request->link_issecondquicklink;
        $link->link_isaddresslink = $request->link_isaddresslink;

        $link->save();
        // set flash meessage to be shown

        Session::flash('success', 'The link was successfully updated');
        //redirect the users

        return redirect()->route('admin.link.show', $link->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = link::find($id);
        $link->delete();

        Session::flash('Success', 'Link Deleted Successfully');

        return redirect()->route('admin.link.index');
    }
}
