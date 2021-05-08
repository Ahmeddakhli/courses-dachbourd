<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Score;
use App\Models\Tag;
use App\DataTables\courseDataTable;

class AdmincourseController extends Controller
{
    public function   admincourse(courseDataTable $dataTable)
    {
        return $dataTable->render('admin.course.courses2');
    }
    public function   adminorder(orderDataTable $dataTable)
    {
        return $dataTable->render('admin.order2');
    }
    public function Financial()
    {
        $course= Course::get();
        
        return view('admin/Financial',['data'=>$course]);
    }

    public function adminaddquestion($id)
    {
        
        return view('admin.course.addquestion', [
        'course_id' =>  $id,
        ]);
    }
    public function adminshowlassons($id)
    {
        $lessons = Lesson::where('course_id', '=', $id)->get();
        
        return view('admin.course.showlessons', [
        'lessons' =>  $lessons,
        'course_id' =>  $id,
        ]);
    }
    public function adminshowtest($id)
    {
        $questions = Question::where('course_id', '=', $id)->get();
        
        return view('admin.course.showtest', [
        'questions' =>  $questions,
        'id'=>$id
        ]);
    }
    public function changeStatus(Request $request)
    {
        
        if ($request->ajax()) {
        $user = Score::find($request->id);
        $user->status =! $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
        }
    }
    public function adminaddcourse(CourseRequest $request)
    {
        Course::create($request->all());
        $course=Course::get()->last();
        $course->tags()->syncWithoutDetaching( $request->tags);
        if(count($course->users)>0){
            event(new courseaddwithtag($course));

        }

        return redirect(route('courses2'));  

        

    }
  

    public function adminshowcert()
    {
        $scores = Score::all();
        
        return view('admin/certifictions', [
        'scores' =>  $scores,
        ]);
    }
  

    public function adminaddlesson($id)
    {
    
        return view('admin.course.addlesson', [
        'course_id' =>  $id,
        ]);
    }
}
