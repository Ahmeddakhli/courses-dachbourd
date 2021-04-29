<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Certificate;
use \App\Http\Requests\CertificateRequest;
use Illuminate\Http\Request;
use Auth;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cert($course_id,$score)
    {
        return  view('certif',['course_id'=>$course_id,'score'=>$score]);
    }
    public function certif($id)
    {
        $course = Course::find($id);
        return view('certif', [
        'course' => $course,
        ]);
    }
    public function certorder(CertificateRequest $request)
    {

        
        Certificate::create([
            'user_id' => Auth::user()->id ,
            'course_id' =>$request->course_id,
            'score' =>$request->course_id,
            'approve' =>0
        ]);
        return redirect( route('courses') );
      
    }
    public function index()
    {
        //
    }

  
}
