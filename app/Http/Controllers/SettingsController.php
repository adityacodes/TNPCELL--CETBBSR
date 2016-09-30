<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth, Session;
use App\Companies;

class SettingsController extends Controller
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

    public function getSettingsIndex()
    {
    	
    }
}
