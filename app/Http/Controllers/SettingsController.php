<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth, Session, View;
use App\Settings;
use App\TNP;

class SettingsController extends Controller
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

    public function getSettingsIndex()
    {
        $keys = Settings::orderBy('id', 'asc')->select('metaname')->pluck('metaname')->all();
        $values = Settings::orderBy('id', 'asc')->select('metavalue')->pluck('metavalue')->all();
        $setting = array_combine($keys, $values);
    	return view('settings.options-general')->with('setting', $setting);
    }

    public function updateSettings(Request $request)
    {
        $setting['sitename'] = $request->sitename;
        $setting['tnp_email'] = $request->tnp_email;
        $setting['tnp_facebook'] = $request->tnp_facebook;
        $setting['tnp_youtube'] = $request->tnp_youtube;
        $setting['tnp_instagram'] = $request->tnp_instagram;
        $setting['tnp_twitter'] = $request->tnp_twitter;
        $setting['tnp_linkedin'] = $request->tnp_linkedin;
        $setting['tnp_googleplus'] = $request->tnp_googleplus;
        $setting['tnp_address'] = $request->tnp_address;
        if(isset($request->registrations_open)){
            if($request->registrations_open == 'on'){
                $setting['registrations_open'] = 1;
            }
        }else{
            $setting['registrations_open'] = 0;
        }
        
 
        foreach ($setting as $key => $value) {
            $setting = Settings::where('metaname','=',$key)->first();
            $setting->metavalue = $value;
            $setting->save();
        }
        Session::flash('success', 'The settings were successfully updated.');

        return redirect()->route('admin.settings');
    }
}
