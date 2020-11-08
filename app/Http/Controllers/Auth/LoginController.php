<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role->id==1007){
            $this->redirectTo= route('superadmin_dashboard');
        }
        elseif(Auth::check() && Auth::user()->role->id==1005){
            $this->redirectTo= route('admin_dashboard');
        }
        elseif(Auth::check() && Auth::user()->role->id==191){
            $this->redirectTo= route('home_content');
        }
        else{
        $this->middleware('guest')->except('logout');
        }
    }
}

        // if(Auth::check() && Auth::user()->role->id==1007){
        //     $this->redirectTo= route('SuperAdmin.superadmin_dashboard');
        // }
        // elseif(Auth::check() && Auth::user()->role->id==1005){
        //     $this->redirectTo= route('Admin.admin_dashboard');
        // }
        // elseif(Auth::check() && Auth::user()->role->id==191){
        //     $this->redirectTo= route('Member.home_content');
        // }
        // else{
        // $this->middleware('guest')->except('logout');
        // }
