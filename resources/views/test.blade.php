@extends('layouts.front')

@section('content')


        <div class="up-container">
            <div class="up-header text-center">
                <div class="container">
                    <h1>دورة البرمجة بلغة الجافا</h1>
  

                </div>
                <!-- /.container -->
            </div>
            <!-- /.up-header -->
            <div class="up-box">
            
                <div class="container">
                
                    <div class="up-form">
                           <div>test closes in <span id="time">01:00</span> minutes!</div>
                        <div id="tabsleft" class="tabbable tabs-left">
                               @if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
          <form method="POST" action="{{ route('courses.store') }}">
                        @csrf
                            <div class="tab-content">
                                @foreach ($questions as $question)
                    <input type="hidden" name="course_id"  value="{{$question->course_id}}">

                                    <div class="quest text-right" >
                                        <div class="quest-head" style=" padding-bottom: 30px;">
                                            <h1> ؟{{$question->question}}</h1>
                                        </div>
                                        <!-- end quest-head -->
                                        <div class="quest-answers">

                             @for ($i = 1; $i < 4; $i++)
                                     <div class="answer" style=" margin-bottom: 10px; padding: 10px;background-color:#f1f1f1;">
                                                <label>
                                                    <input type="radio" name="{{$question->id}}" id="make-answer"  value="{{$question->$i}}">

                                                    <span>{{$question->$i}}</span>
                                                    
                                                </label>
                                            </div>
                                            <!-- end answer -->
                               @endfor
                               <input type="hidden" name="qids[]" id="make-answer"  value="{{$question->id}}">
      
                                   
                                       
                                       
                                            <!-- end answer -->
                                        </div>
                                        <!-- end quest-answers -->
                                    </div>
                                    <!-- end quest -->
                          @endforeach
                                <div  >
                                    

     <div class="btn btn-white btn-block">
                        <span><input type="submit" value="إرسال"></span>
                    </div>
                </form>


                            </div>
                        </div>
                    </div>
                    <!-- /.up-form -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.up-box -->
        </div>
        <!-- /.up-container -->

        <footer>
            <div class="container">
                <div class="copyrights col-md-10 col-xs-12 text-center pull-right">
                    <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
                </div>
                <!-- /.copyrights -->
                <div class="footer-links col-md-2 col-xs-12 pull-left">
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-links -->
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->
                <!-- /.allcourses-box -->
                <script>
                function startTimer(duration, display) {
                        var timer = duration, minutes, seconds;
                        setInterval(function () {
                            minutes = parseInt(timer / 60, 10);
                            seconds = parseInt(timer % 60, 10);

                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;

                            display.textContent = minutes + ":" + seconds;

                            if (--timer < 0) {
                               
                             window.location.replace("http://127.0.0.1:8000/courses");

                            }
                        }, 1000);

                    }

                    window.onload = function () {
                        var fiveMinutes = 60 * .5,
                            display = document.querySelector('#time');
                        startTimer(fiveMinutes, display);

                    };
</script>
@endsection
<x-guest-layout>

</x-guest-layout>