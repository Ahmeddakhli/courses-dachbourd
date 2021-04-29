<?php

namespace App\Http\Controllers\lecturer;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use \App\Http\Requests\MassageRequest;


use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{


    public function send(MassageRequest $request,$id)
    {
      
        $details = [
            'title' => $request->title,
            'body' => $request->body
                
            
        ];
        Massage::create([
            'title' => $request->title,
            'body' => $request->body,
            'lecturer_id' =>  auth()->guard('lecturer')->user()->id,
            'course_id' =>$id  ,
        ]);
 $course= Course::find($id);

foreach($course->orders as $order){

$email= $order->user->email;

        Mail::to($email)->send(new \App\Mail\MyTestMail($details));
    }
    return redirect(route('lecturerhome'));
    }
   
    public function destroy(Massage $massage)
    {
        //
    }
}
