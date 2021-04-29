<?php

namespace App\Http\Controllers\lecturer;

use App\Models\Question;
use App\Http\Controllers\Controller;
use \App\Http\Requests\QuestionRequest;
use App\Models\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtest($id)
    {
        $questions = Question::where('course_id', '=', $id)->get();
        
        return view('testlec', [
        'questions' =>  $questions,
        'course_id' =>  $id,
        ]);
    }
     
    public function addqu($id)
    {
        
        return view('add-test', [
        'course_id' =>  $id,
        ]);
    }
    
    public function storetest(QuestionRequest $request)
    {
        $cor=$request->f;
    
        Question::create([
        
            'course_id' => $request->course_id,
            'correct_answer' => $request->$cor,
            'question' => $request->question,
            '1' =>  $request->n1,
            '2' => $request->n2,
            '3' =>  $request->n3,
        
        ]);
    return redirect( route('addtest', $request->course_id)  );
  


    }
    public function test($id)
    {
        $questions = Question::where('course_id', '=', $id)->get();
        
        return view('test', [
        'questions' =>  $questions,
        ]);
    }

   
    public function destroy(Test $test)
    {
        //
    }
}
