<?php

namespace App\Http\Controllers;
use App\Models\Lecturer;

use App\Http\Middleware\Lecturer as le;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function addtag(Request $request)
    {

    $lecturer=Lecturer::find($request->id);
    
        $lecturer->tags()->syncWithoutDetaching( $request->tags);
        return redirect(route('lecturerhome'));


    }

    public function addusertag(Request $request)
    {

    $user=User::find($request->id);
    
        $user->tags()->syncWithoutDetaching( $request->tags);
        return redirect()->back();


    }
    public function deltag(Tag $tag)
    {
      // $user=Lecturer::find(auth()->guard('lecturer')->user()->id);
     //  $user->tags()->detach($tag);
     $tag->delete();
        return redirect()->back()
                        ->with('success','Project deleted deleted successfully');


    }
 
 
}
