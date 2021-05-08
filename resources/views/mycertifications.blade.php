@extends('layouts.front')

@section('content')




                <div class="allcourses-box">
                    <div class="allcourses-head text-center">
                        <div class="container">
                            <h1>جميع الشهادات</h1>
                            <div class="nav-left nav-mobile col-md-4 col-xs-12 pull-left">
                            
                            <!-- /.nav-user -->
                        </div>
                        <!-- /.container -->
                    </div>
                    
                    <!-- /.search-categories -->
                    <div class="allcourses-body">
                        <div class="container">
                            <div class="row">
                                <div class="row block-container">
                                @php
                               $questions=       Auth::user()->scores;
                                @endphp
                              
      @if(count($questions)>0)
                            @foreach ( $questions as $question )
                  <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
               <div class="card" style="width: 18rem;">
               @if ($question->status>0)
               <a href="{{route('cert', ['course_id'=>$question->course_id,'score'=>$question->score] )}}">
               <img class="card-img-top " src="{{asset('images/comment-02.jpg')}}" alt="Card image cap"></a>
                     

               @else
                     <img class="card-img-top " src="{{asset('images/comment-02.jpg')}}" alt="Card image cap">

               @endif
  <div class="card-body">
   <div class="answer" style=" margin-bottom: 10px; padding: 10px;background-color:#f1f1f1;">
   <span>اسم الدوره:</span>
  
             {{ $question->course->title}}</p>
                    @if ($question->status>0)
                        
                                                <label>
                                <p class="card-text">  
                               
                                                    <span>النتيجه</span>

                                                    <span>{{$question->score}}</span>
                                                    
                                                </label>
                                            </div>
                                            <!-- end answer -->
                    @else
                        <p class="card-text">    سيتم عرض اتفاصيل الشهاده بعد مراجعتها      </p>

                    @endif
                    </div>
</div>
                
            @endforeach
            @else

                     <h1> لايوجد شهادات  </h1>
              @endif



                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->

                       
                            <!-- end inner -->

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.allcourses-body -->
                </div>
                <!-- /.allcourses-box -->
@endsection
<x-guest-layout>

</x-guest-layout>