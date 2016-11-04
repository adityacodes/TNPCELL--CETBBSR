<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Alumni;
use Session, Auth, View;
use App\Conpanies;
use App\TNP;

class CompaniesController extends Controller {

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
	 * @return Response
	 */
	public function index()
	{
		//create a variable and store all the blog alumnis in it
		$alumnis = Companies::orderBy('id', 'desc')->paginate(5);

		//return a view and pass in the above variabe
		return view('alumnis.index')->withAlumnis($alumnis);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('alumnis.create');
	}

	/**\
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//1. validate the date
		$this->validate($request, array(
				'alumni_name' => 'required|max:255',
				'alumni_company' => 'required',
				'alumni_designation' => 'required', 
				'alumni_website' => 'required',
				'alumni_image' => 'required',
				'creator' => 'required',
				'diplomayear'=> 'required',
				'diplomapercent'=> 'required',
				'cgpa'=> 'required',
				'backlog'=> 'required',
			));
		//2. Store in the DB
		$alumni = new Alumni;

		$alumni->alumni_name = $request->alumni_name;
		$alumni->alumni_designation = $request->alumni_designation;
		$alumni->alumni_website = $request->alumni_website;
		$alumni->alumni_image = $request->alumni_image; 
		$alumni->creator = $request->creator;
		$alumni->alumni_company = $request->alumni_company;

		$alumni->save();

		//3. Redirect to another page
		Session::flash('success', 'The alumni was successfully saved.');

		return redirect()->route('admin.alumni.show', $alumni->id);


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
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
	 * @return Response
	 */
	public function edit($id)
	{
		//find the alumni in the db ans save as a var
		$alumni = Alumni::find($id);
		//return the view and pass in the var we previously created
		return view('alumnis.edit')->withAlumni($alumni);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//validate data
		$alumni = Alumni::find($id);

		if ($request->input('slug') == $alumni->slug ) {
			$this->validate($request, array(
				'alumni_name' => 'required|max:255',
				'alumni_company' => 'required',
				'alumni_designation' => 'required', 
				'alumni_website' => 'required',
				'alumni_image' => 'required',
				'creator' => 'required',
			));
		}

		else{
			$this->validate($request, array(
				'alumni_name' => 'required|max:255',
				'slug'	=> 'required|alpha_dash|min:5|max:255|unique:alumnis,slug',
				'alumni_company' => 'required',
				'alumni_designation' => 'required', 
				'alumni_website' => 'required',
				'alumni_image' => 'required',
				'creator' => 'required',
			));
		}
		

		//save the data
		$alumni->alumni_name = $request->alumni_name;
		$alumni->alumni_designation = $request->alumni_designation;
		$alumni->alumni_website = $request->alumni_website;
		$alumni->alumni_image = $request->alumni_image; 
		$alumni->creator = $request->creator;
		$alumni->alumni_company = $request->alumni_company;

		$alumni->save();
		// set flash meessage to be shown

		Session::flash('success', 'The alumni was successfully updated');
		//redirect the users

		return redirect()->route('admin.alumni.show', $alumni->id);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$alumni = Alumni::find($id);
		$alumni->delete();

		Session::flash('Success', 'Alumni Deleted Successfully');

		return redirect()->route('admin.alumni.index');
	}

	

}

