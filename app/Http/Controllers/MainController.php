<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Alumni;
use App\Companies;
use App\Notice;
use App\Event, App\Link, App\Slider;
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
		$events = Event::all();
		$sliders = Slider::all();
		$notices = Notice::all();
		return view('main.index')->withSliders($sliders)
								->withEvents($events)
								->withNotices($notices);
	}


	public function getMainCompanies()
	{

		$companies =  DB::table('companies')->inRandomOrder()->get();
		return view('main.companies')->withCompanies($companies);

	}
	public function getMainEvents()
	{
		return view('main.events');

	}
	public function getMainAlumni()
	{
		$alumnis = DB::table('alumnis')->inRandomOrder()->get();
		return view('main.alumni')->withAlumnis($alumnis);

	}
	
	public function getMainOffice()
	{
		return view('main.office');

	}
	public function getMainLocation()
	{

		return view('main.location');

	}
	public function getMainWhyCet()
	{
		return view('main.whycet');

	}
	public function getMainMessage($slug)
	{
		return view('main.message')->with('slug', $slug);
	}
}
