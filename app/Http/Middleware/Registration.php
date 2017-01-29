<?php

namespace App\Http\Middleware;

use Closure;
use App\Settings, Session;

class Registration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ropen = Settings::where('metaname','=','registrations_open')->value('metavalue');
        if($ropen)
        {
            return $next($request);
        }
        else{
            Session::flash('warning', 'Registrations are not open yet. Thank You!');
        }
        return redirect()->guest('login');
    }
}
