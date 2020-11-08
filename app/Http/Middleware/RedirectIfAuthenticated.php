<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id==1007) {
            return redirect()->route('superadmin_dashboard');
        }
        elseif(Auth::guard($guard)->check() && Auth::user()->role->id==1005){
            return redirect()->route('admin_dashboard');
        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==191) {
            return redirect()->route('home_content');
        }
        else{
            return $next($request);
        }
    }
}
// if (Auth::guard($guard)->check() && Auth::user()->role->id==1007) {
        //     return redirect()->route('SuperAdmin.superadmin_dashboard');
        // }
        // elseif(Auth::guard($guard)->check() && Auth::user()->role->id==1005){
        //     return redirect()->route('Admin.admin_dashboard');
        // }
        // elseif (Auth::guard($guard)->check() && Auth::user()->role->id==191) {
        //     return redirect()->route('Member.home_content');
        // }
