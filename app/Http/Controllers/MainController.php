<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Settings;
class MainController extends Controller
{
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('web');
		
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getMainIndex()
	{ 
		return view('main.index');
	}

	public function getMainCompanies(){

		return view('main.companies');
	}
	public function getMainStudents(){

		return view('main.students');

	}
	public function getMainProgrammes(){

		return view('main.programmes');

	}
	public function getMainFaculty(){

		return view('main.faculty');

	}
	public function getMainOffice(){

		return view('main.office');

	}
	public function getMainLocation(){

		return view('main.location');

	}
	public function getMainWhyCet(){

		return view('main.whycet');

	}
	public function getMainMessage($slug)
	{
		$settings= Settings::where('metaname', 'LIKE', $slug.'%')->get()->pluck('metavalue', 'metaname');
		return view('main.message')->withSettings($settings)->with('slug', $slug);
	}
}
