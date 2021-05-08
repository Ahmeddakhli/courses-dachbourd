<?php


namespace App\Http\Controllers\lecturer;
use App\Http\Controllers\Controller;
use \App\Http\Requests\LessonRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
 
    public function addlesson(LessonRequest $request,$id)
    {
    
  

        $fileName = time().rand(0, 1000);
        $fileName = $fileName.'.'.$request->document_link->extension();;  
        $request->file('document_link')->storeAs('uploads', $fileName, 'public');

          
            Lesson::create([
                'course_id' =>$id ,
                'description' => $request->description,
                'document_link' => $fileName,
                'order' =>  $request->order,
                'title' => $request->title,
                'vedio_link' =>  $request->vedio_link,
            ]);
            return redirect( )->back();
            
        
    
   

    }
    public function adminaddlesson(LessonRequest $request,$id)
    {
    
  

        $fileName = time().rand(0, 1000);
        $fileName = $fileName.'.'.$request->document_link->extension();;  
        $request->file('document_link')->storeAs('uploads', $fileName, 'public');

          
            Lesson::create([
                'course_id' =>$id ,
                'description' => $request->description,
                'document_link' => $fileName,
                'order' =>  $request->order,
                'title' => $request->title,
                'vedio_link' =>  $request->vedio_link,
            ]);
            return redirect( )->back();
            
        
    
   

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
