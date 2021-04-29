<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Userable;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Question;
use App\Models\Score;
use \App\Http\Requests\CourseRequest;
use App\Models\User;
use App\Providers\courseaddwithtag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;


use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcourses = Course::paginate(9);
      //  $alltag = Tag::whereHas('courses')->get();
          return view('welcome', [
            'allcourses' =>  $allcourses,
          
        ]);

    }
    public function mycourses()
    {
        $allcourses = Order::where('user_id','=',Auth::user()->id)->get();
 
      //  $alltag = Tag::whereHas('courses')->get();
          return view('mycourses', [
            'allorders' =>  $allcourses,
          
        ]);

    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $allcourses = Course::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('welcome', [
            'allcourses' =>  $allcourses,
        ]);
        
    }
 
    public function courseintro($id)
    {
        $course = Course::find($id);
        return view('course-intro', [
        'course' => $course,
        ]);
    }
    public function alart($id)
    {$course = Course::find($id);
        $massages = $course->massages;
        
       
        return view('course-alerts', [
        'massages' =>   $massages,
        'course' => $course,
        ]);
    }
  
 
    public function coursepage($id)
    {
        $course = Course::find($id);
        return view('course_page', [
        'course' => $course,
        ]);
    }
    public function coursepage2($id)
    {
        $course = Course::find($id);
        return view('course_page2', [
        'course' => $course,
        ]);
    }
    public function video($id)
    {
        $lesson = Lesson::find($id);
        $course = Course::find($lesson->course_id);
        return view('video', [
        'lesson' => $lesson,
        'course' => $course,
        ]);
    }
  
    public function completed($lesson_id)
    {
        Userable::create([
           
            'user_id' => Auth::user()->id ,
            'userable_id' =>$lesson_id,
            'userable_type' =>'App\Models\Lesson',
        ]);
        $lesson = Lesson::find($lesson_id);
        $course = Course::find($lesson->course_id);
      
        return redirect( route('video',$lesson_id, [
            'lesson' => $lesson,
            'course' => $course,
            ] ) );
            return view('lecturerhome');

    }
    public function create()
    {
        return view('addcourse');
    }


       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecourse(CourseRequest $request)
    { 
        
        Course::create($request->all());
        $course=Course::get()->last();
        $course->tags()->syncWithoutDetaching( $request->tags);
        event(new courseaddwithtag($course));

        return redirect(route('lecturerhome'));  

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        
        $questions = Question::where('course_id', '=', $request->course_id)->get();
        $j=0;
        for ($i = 1; $i  <= count($questions); $i++)
        {
            
           if($request->$i ==  $questions->find($i)->correct_answer) 
           {
            $j=$j+5; 
           }


        }
        if( $j/$i*100>=50)
        {
           $order= Order::where('course_id', '=', $request->course_id)->where('user_id', '=',  Auth::user()->id)->first();
       
            
            Score::create([
                'score' => $j,
                'course_id' => $request->course_id ,
                'user_id' =>Auth::user()->id ,
            ]);
            $score = ($j/(($i-1)*5))*100;
         return  view('certif',['course_id'=>$request->course_id,'score'=>$score]);

            
        }
else{
    return redirect( route('test',$request->course_id) );
}
    }

  
    public function api()
    {
        $allcourses = Course::all();
        return $allcourses->toJson();
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $Course)
    {
        $Course->delete();
        
      
        return redirect()->route('lecturerhome')
                        ->with('success','Project deleted deleted successfully');
    }

}
