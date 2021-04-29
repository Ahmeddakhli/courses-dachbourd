@extends('layouts.front')

@section('content')


        <div class="intro-container col-xs-12">
            <div class="intro-head text-center">
                <div class="container">
                    <h1>  {{$course->title}} كورس</h1>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.intro-head -->

            <div class="corse-box col-xs-12">
                <div class="corse-nav text-center">
                    <div class="container">
                        <ul>
                            <li>
                                <a href="{{ route('course_lesson', $course->id) }}" class="active">
                                    <i class="fa fa-tasks"></i> الدروس
                                </a>
                            </li>

                            <li>
                          

                                <li>
                                    <a href="{{ route('alart', $course->id) }}">
                                        <i class="fa fa-bell"></i> التنويهات
                                    </a>
                                </li>
                             
                           
                        </ul>
                        <!-- =========================================================================================================================================== -->



          

                        <!-- =========================================================================================================================================== -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end corse-nav -->
                <div class="lesson-box text-right">
                    <div class="container">
                
                        <!-- end certf -->
               
                        <!-- end empty-msg -->
                        <div class="week-module text-right">
                            <h1>
                                <i class="fa fa-tasks"></i>
                                    كل الدروس    
                            </h1>
                        </div>
                        <!-- end week-moduke -->
                                            
                           @if (count($course->lessons)>0)
              <ul>
        
                                 @foreach($course->lessons as $lesson)
                                                    
                                     
                                                 <li>
                                                <a href="{{ route('video', $lesson->id) }}" class="lesson-det">
                                                    <i class="fa fa-play-circle"></i>
                                                    <span class="lesson-name">{{$lesson->title}}</span>
                                             
                                                </a> 
                                                         <form action="{{ route('lessons.destroy',$lesson->id) }}" method="post">
                                                                @csrf
                                                                {{method_field('delete')}}   
                                                                <button class='btn btn-danger del-lesson'  data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف الدرس"  onclick="return confirm('Are you sure?you want to delete this فكر تانى ')"> <i class="fa fa-trash"></i> حذف الدرس</button>

                                                 </form>    
                                            </li>
                                        
                                        
                                     
                                             
                                 @endforeach


                              @else
                              <li>  لايوجد دروس</li>

                                          
                            
                              @endif
                     
                            
                            

                        </ul>
                       

                        <!-- end take-exam -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end lesson-box -->
            </div>
            <!-- end corse-box -->

        </div>
        <!-- /.intro-container -->

       
    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->
     <div class="panel-pop modal" id="instructor">
        <div class="intro-instructor col-xs-12 text-right">
            <div class="intro_instructor-inner">
                <h1>عن المدرس</h1>
                <div class="avatar text-center">
                    <div class="av-inner">
                        <img src="images/s.png" alt="" width="80" height="80">
                    </div>
                    <!-- /.av-inner -->
                </div>
                <!-- /.avatar -->
                <div class="instructor-data">
                    <a>أمير ناجح الدسوقي</a>
                    <p>أستاذ مساعد في كلية الحاسب في جامعة الملك سعود ومستشار لامن المعلومات في مركز التميز لأمن المعلومات في الجامعة حاصل على شهادة البكالوريوس في علوم الحاسب بتقدير امتياز مع مرتبة الشرف الاولى من جامعة الملك سعود حاصل على جائزة الطالب المثالي في جامعة الملك سعود لعام ٢٠٠٣ وهي جائزة تعطى لطالب واحد كل عام في الجامعة حاصل على جائزة الملك عبد العزيز للرعاية الموهوبين وذلك عن مشروع تخرجي في درجة البكالوريوس Linux Alarm حاصل على ماجستير بتقدير امتياز من جامعة كاليفورنيا سانتا باربرا في تخصص التحقق من صحة خدمات الانترنت حاصل على شهادة الدكتوراه في تخصص ايجاد الاخطاء البرمجية والثغرات الأمنية في مواقع الانترنت واصلاحها اوتوماتيكيا وذلك بتقدير امتياز وجائزة رسالة دكتوراه متميزة من قسم علوم الحاسب في جامعة كاليفورنيا سانتا باربرا حاصل على جائزة أفضل رسالة دكتوراه في هندسة البرمجيات لعام ٢٠١٥ من الجمعية العلمية للأجهزة الحاسوبية ACM SIGSOFT وهي أكبر جميعة علمية في علوم الحاسب وهندسة البرمجيات في العالم ومقرها أمريكا</p>
                </div>
                <!-- /.instructor-data -->
            </div>
            <!-- /.intro_instructor-inner -->
        </div>
        <!-- /.intro-instructor -->
    </div>
    <!-- /.modal -->

@endsection
<x-guest-layout>

</x-guest-layout>