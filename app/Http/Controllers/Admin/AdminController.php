<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\User;
use App\Models\setting;
use App\Models\Lecturer;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Order;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   

    public function client()
    {
        $data= User::get();
        
        return view('admin/client',compact('data'));
    }
   
    public function  lecturers()
    {
        $data=  Lecturer::get();
        
        return view('admin/lecturers',compact('data'));
    }
    public function  orders()
    {
        $data=  Order::get();
        
        return view('admin/orders',compact('data'));
    }
    public function course()
    {
        $data= Course::get();
        
        return view('admin/course',compact('data'));
    }
    
    public function lecturershow($id)
    {
        $user= Lecturer::find($id);
        
        return view('admin/lecturer',['user'=>$user]);
    }
    public function courseshow($id)
    {
        $course= Course::find($id);
        
        return view('admin/showcourse',['course'=>$course]);
    }
    public function usershow($id)
    {
        $user= User::find($id);
        
        return view('admin/user',['user'=>$user]);
    } /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = 5;
       $count = 6;
       $slider= 9;
       return view('admin/home',compact('count','client','slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Financial()
    {
        $course= Course::get();
        
        return view('admin/Financial',['data'=>$course]);
    }
    public function tags()
    {
        $tags= Tag::get();
        
        return view('admin/tags',['tags'=>$tags]);
    }
    public function storetag(Request $request)
    { 
        $request->validate([
            'title' => 'bail|required|unique:tags|max:255',
           
        ]);
        

          Tag::create([
            'title' => $request->title,
           
        ]);

        

        return redirect(route('tags'));
    
    }
 
    public function  aboutus()
    {
       /* if (App::isLocale('en')) {
     
        }*/
        $settings= Setting::where('page',"services")->get();
        $links= Setting::all()->where('page',"link");
        
        return view('about-us',compact('settings','links'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
