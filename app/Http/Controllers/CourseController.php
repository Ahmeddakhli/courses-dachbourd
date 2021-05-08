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
        $fileName = time().rand(0, 1000);
        $fileName = $fileName.'.'.$request->img->extension();;  
        $request->file('img')->storeAs('uploads', $fileName, 'public');

        Course::create(
            [
                'title'=> $request->title,
                'vedio_link'=>$request->vedio_link,
                'img' =>$fileName,
                'sex'=>$request->sex,
               'description'=>$request->description,
                'course_payment'=>$request->course_payment,
                'course_mony'=>$request->course_mony,
                'wellcome_massage'=>$request->wellcome_massage,
                'start_at'=>$request->start_at,
                'end_at'=>$request->end_at,
            ]
        );
        $course=Course::get()->last();
        $course->tags()->syncWithoutDetaching( $request->tags);
        event(new courseaddwithtag($course));

        return redirect()-back()->withInput();  

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
        foreach($request->qids as $id)
        {
           if($request->$id ==  $questions->find($id)->correct_answer) 
           {
            $j=$j+10; 
           }


        }
    
        if( $j>=10*count($request->qids)/2)
        {
           $order= Order::where('course_id', '=', $request->course_id)->where('user_id', '=',  Auth::user()->id)->first();
       
            
            Score::create([
                'score' => $j,
                'status' => 0,
                'course_id' => $request->course_id ,
                'user_id' =>Auth::user()->id ,
            ]);
        
            $score = ($j/(10*count($request->qids)))*100;
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
