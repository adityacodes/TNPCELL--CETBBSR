<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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

	public function getMainAbout()
	{

	}

	public function getMainContact()
	{
		
	}

	public function getMainVisit()
	{
		
	}

	public function getMainWhyCet()
	{
		
	}
	public function getMainMessage($slug)
	{
		return view('main.message');
	}
}
