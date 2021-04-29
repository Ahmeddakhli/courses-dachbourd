<?php

namespace App\Providers;

use App\Providers\courseaddwithtag;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class SendEmailcoursewithtagNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  courseaddwithtag  $event
     * @return void
     */
    public function handle(courseaddwithtag $event)
    {
      $tags=  $event->course->tags;
      $details = [
        'title' => "{$tags->first()->title}بعنوان تحت مجال{$event->course->title}تمت اضافه دوره جديده ",
        'body' => "jjhgggg"
            
        
    ];
    $basic  = new \Vonage\Client\Credentials\Basic("be6ab137", "EZ4ztCSlYH5XAvze");
    $client = new \Vonage\Client($basic);

   
      foreach($tags as $tag){
                foreach($tag->users as $user){
                

                $email= $user->email;
                    
                 Mail::to($email)->send(new \App\Mail\MyTestMail($details));
                 
                 $response = $client->sms()->send(
                    new \Vonage\SMS\Message\SMS("201146820407", panorama, "{$tag->title}بعنوان تحت مجال{$event->course->title}تمت اضافه دوره جديده")
                );
                
                    
                
                }
      }

    }

}
