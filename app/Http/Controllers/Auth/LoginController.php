<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use Socialite;
=======
>>>>>>> 27ed514c4ce3a61d793f59989dcf3cb35870e54c
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
<<<<<<< HEAD
=======

    public function storeOwnerLogin(){
        return view('auth.store.login');
    }

    /**
     * Our custom auth username
     */
    public function username(){
        return 'phone_number';
    }
>>>>>>> 27ed514c4ce3a61d793f59989dcf3cb35870e54c
}
