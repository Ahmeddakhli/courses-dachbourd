<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Session;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Admin;

class AdminAuthController extends Controller
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
    protected $redirectTo = '/adminlogin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
           $request->session()->regenerate();
          
            
            return redirect()->route('admin');
            
        } else {
            return back();
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

       
             
        return redirect(route('adminLogin'));
    }
    protected function guard() // And now finally this is our custom guard name
    {
        return Auth::guard('admin');
    }

}
