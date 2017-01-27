<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Settings;

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
		$settings = Settings::where('metaname', 'LIKE', '%_%')->get()->pluck('metavalue', 'metaname');
		$events = Event::all();
		$sliders = Slider::all();
		$notices = Notice::all();
		$links = Link::all();
		return view('main.index')->withSliders($sliders)
								->withSettings($settings)
								->withEvents($events)
								->withNotices($notices)
								->withLinks($links);
	}

		public function getMetaSettings(){
			return Settings::where('metaname', 'LIKE', '%_%')->get()->pluck('metavalue', 'metaname');
		}

	public function getMainCompanies()
	{

		$settings= $this->getMetaSettings();
		$companies =  DB::table('companies')->inRandomOrder()->get();
		$links = Link::all();
		return view('main.companies')->withCompanies($companies)->withSettings($settings)->withLinks($links);

	}
	public function getMainEvents()
	{
		$settings= $this->getMetaSettings();
		$links = Link::all();
		return view('main.events')->withSettings($settings)->withLinks($links);;

	}
	public function getMainAlumni()
	{
		$settings= $this->getMetaSettings();
		$alumnis = DB::table('alumnis')->inRandomOrder()->get();
		$links = Link::all();
		return view('main.alumni')->withSettings($settings)->withAlumnis($alumnis)->withLinks($links);

	}
	
	public function getMainOffice()
	{
		$settings= $this->getMetaSettings();
		$links = Link::all();
		return view('main.office')->withSettings($settings)->withLinks($links);

	}
	public function getMainLocation()
	{
		$settings= $this->getMetaSettings();
		$links = Link::all();
		return view('main.location')->withSettings($settings)->withLinks($links);

	}
	public function getMainWhyCet()
	{
		$settings= $this->getMetaSettings();
		$links = Link::all();
		return view('main.whycet')->withSettings($settings)->withLinks($links);

	}
	public function getMainMessage($slug)
	{
		$links = Link::all();
		$settings= $this->getMetaSettings();
		return view('main.message')->withSettings($settings)->withLinks($links)->with('slug', $slug);
	}
}
