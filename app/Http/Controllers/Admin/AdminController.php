<?php

namespace App\Http\Controllers\Admin;
use App\Charts\UserChart;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


use App\Models\Admin;
use App\Models\Question;
use App\Models\User;
use App\Models\setting;
use App\Models\Lecturer;
use App\DataTables\lecturerDataTable;

use App\DataTables\orderDataTable;
use App\Providers\courseaddwithtag;

use Illuminate\Support\Facades\Hash;
use \App\Http\Requests\CourseRequest;
use \App\Http\Requests\LecturerRequest;

use \App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Score;
use App\Models\Tag;
use Illuminate\Http\Request;

use DataTables;

class AdminController extends Controller
{
   

    public function client(Request $request)
    {
       // $data= User::get();
        
       // return view('admin/client',compact('data'));
       if ($request->ajax()) {
        $data = User::latest()->get();
    
        return Datatables::of($data)
            ->addIndexColumn()
           
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->editColumn('name', function ($row) {
                return '<a href="'.route('usershow', $row->id).'">'.$row->name.'</a>';
            })
            ->rawColumns(['action','name'])
            
            ->make(true);
    }
    }
    public function home()
    {
        $chart_options = [
            'chart_title' => 'Users by days',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 30, // show only last 30 days
        ];
    
        $chart1 = new LaravelChart($chart_options);
    
    
        $chart_options = [
            'chart_title' => 'Users by day',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
    
            'chart_type' => 'pie',
            
            'filter_field' => 'created_at',
            'filter_days' => 30,  // show users only registered this month
        ];
    
        $chart2 = new LaravelChart($chart_options);
    
        $chart_options = [
            'chart_title' => 'Transactions by dates',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Transaction',
            'group_by_field' => 'transaction_date',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'amount',
            'chart_type' => 'line',
        ];
        $chart3 = new LaravelChart($chart_options);
        return view('admin/users',[ 'chart2' => $chart2, 'chart3' => $chart3, 'chart1' => $chart1,]);
    }



    public function   addminlecturer(lecturerDataTable $dataTable)
    {
        return $dataTable->render('admin.lecturers2');
    }



   

  

    public function userstore(UserRequest $request)
    {
     

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'country' => $request->country,
            'sex' => $request->sex,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        

        return redirect(route('clientuser'));
    }
    public function lecturerstore(LecturerRequest $request)
    {
     

     Lecturer::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'country' => $request->country,
            'sex' => $request->sex,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        

        return redirect(route('addminlecturer'));
    }
   
    
   
 
    
    public function lecturershow($id)
    {
        $user= Lecturer::find($id);
        
        return view('admin.lecturer',['user'=>$user]);
    }
    public function courseshow($id)
    {
        $course= Course::find($id);
        
        return view('admin.course.showcourse',['course'=>$course]);
    }
    public function usershow($id)
    {
        $user= User::find($id);
        
        return view('admin.user',['user'=>$user]);
    } /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
       

        $chart_options = [
            'chart_title' => 'Users by days',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 30, // show only last 30 days
        ];
    
        $chart1 = new LaravelChart($chart_options);
    
    
        $chart_options = [
            'chart_title' => 'Users by day',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
    
            'chart_type' => 'pie',
            
            'filter_field' => 'created_at',
            'filter_days' => 30,  // show users only registered this month
        ];
    
        $chart2 = new LaravelChart($chart_options);
    
        $chart_options = [
            'chart_title' => 'Transactions by dates',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Transaction',
            'group_by_field' => 'transaction_date',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'amount',
            'chart_type' => 'line',
        ];
        $chart3 = new LaravelChart($chart_options);
        $client = 5;
       $count = 6;
       $slider= 9;
       return view('admin/home', ['count' => $count,'client' => $client,'slider' => $slider,'chart2' => $chart2, 
       'chart3' => $chart3, 'chart1' => $chart1 ] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
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
