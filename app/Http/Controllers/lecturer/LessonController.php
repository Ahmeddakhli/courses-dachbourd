<?php


namespace App\Http\Controllers\lecturer;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
 
    public function addlesson(Request $request,$id)
    {
    
    
    Lesson::create($request->all());
    return redirect( route('lecturerhome') );
  


    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        
      
        return redirect()->back();
    }
}
