<?php

namespace App\Http\Middleware;

use Closure, Session;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if ( Auth::check() && Auth::user()->isSuperAdmin() )
        {
            return $next($request);
        }
        Session::flash('warning', 'You need to be a super admin in order to view the content.');
        return redirect()->route('admin.post.index');
    }
}
