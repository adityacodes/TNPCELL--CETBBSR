<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Settings;

use App\Alumni;
use App\Companies;
use App\Notice;
use App\Event;
use DB;

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
		$settings= Settings::where('metaname', 'LIKE', '%_%')->get()->pluck('metavalue', 'metaname');
		$events = Event::all();
		$notices = Notice::all();
		return view('main.index')->withSettings($settings)->withEvents($events)->withNotices($notices);
	}

	public function getMainCompanies(){

		$companies =  DB::table('companies')->inRandomOrder()->get();
		return view('main.companies')->withCompanies($companies);

	}
	public function getMainStudents(){

		return view('main.students');

	}
	public function getMainEvents(){
		
		return view('main.events');

	}
	public function getMainAlumni(){

		$alumnis = DB::table('alumnis')->inRandomOrder()->get();
		return view('main.alumni')->withAlumnis($alumnis);

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
