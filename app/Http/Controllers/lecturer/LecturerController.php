<?php

namespace App\Http\Controllers\lecturer;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \App\Http\Requests\StorelecturerRequest;


class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function leclogin()
    {
        return view('auth.leclogin');
    }
    public function   savelogin(Request $request)
    {
     
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);
    
            if (Auth::guard('lecturer')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                $user = auth()->guard('lecturer')->user();
            
                
                return redirect(route('lecturerhome'));
            }
            return back()->withInput($request->only('email'));
    }
  
    public function logout()
    {
        auth()->guard('lecturer')->logout();
         
        return redirect(route('lecturer.login'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('register_lecturer');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StorelecturerRequest $request)
    { 
       

    $user = Lecturer::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'country' => $request->country,
            'sex' => $request->sex,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        

        return redirect(route('lecturer.login'));
    
    }


    
    
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
