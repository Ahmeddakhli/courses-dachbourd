<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use \App\Http\Requests\LecturerRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register_lecturer');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(LecturerRequest $request)
    {
  
      

        Auth::login($user = Lecturer::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'country' => $request->country,
            'sex' => $request->sex,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect()->back();
    }
}
