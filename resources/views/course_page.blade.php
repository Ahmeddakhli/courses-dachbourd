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
                                <a href="{{ route('course_page', $course->id) }}" class="active">
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
                                    <a href="#" class="know-teacher" data-toggle="tooltip" data-placement="top" title="اضغط لمعرفة هوية المحاضر">أمير ناجح</a>
                                    <p>أستاذ مساعد في كلية الحاسب في جامعة الملك سعود ومستشار لامن المعلومات في مركز التميز لأمن المعلومات في الجامعة حاصل على شهادة البكالوريوس في علوم الحاسب بتقدير امتياز مع مرتبة الشرف الاولى من جامعة الملك سعود حاصل على جائزة الطالب المثالي في جامعة الملك سعود لعام ٢٠٠٣ </p>
                                </div>
                                <!-- /.instructor-data -->
                            </div>
                        <!-- end empty-msg -->
                        <div class="week-module text-right">
                            <h1>
                                <i class="fa fa-tasks"></i>
                                    كل الدروس    
                            </h1>
                        </div>
                        <!-- end week-moduke -->
                                <?php use App\Models\User; $completed= User::find(Auth::user()->id)->lessons->where('course_id',$course->id); 
                                

                                ?> 
                        <ul>
 @if(count( $course->lessons)>0)   
     @if(count( $completed)>0)
           @foreach($completed as $lessoncom)
    
            <li>
                    <a href="{{ route('video', $lessoncom->id) }}" class="lesson-det">
                        <i class="fa fa-play-circle"  style=" color: #2ecc71;"></i>
                        <span class="lesson-name"  style=" color: #2ecc71;">{{$lessoncom->title}}</span>
                    </a>     
                </li>
            <?php $ids[]= $lessoncom->id;?>                    
          @endforeach
                              @if (count($course->lessons->whereNotIn('id', $ids)) > 0)
                                 @foreach($course->lessons->whereNotIn('id', $ids) as $lesson)
                                                    
                                     
                                                 <li>
                                                <a href="{{ route('video', $lesson->id) }}" class="lesson-det">
                                                    <i class="fa fa-play-circle"></i>
                                                    <span class="lesson-name">{{$lesson->title}}</span>
                                                </a>     
                                            </li>
                                        
                                        
                                     
                                             
                                 @endforeach


                              @else
                                @php $scorse=  Auth::user()->scores->where('course_id' ,$course->id); @endphp
                             

                                  @if (count( $scorse))
                                                    <div class="certf text-center animated bounceIn">
                                    
                                                        <h1>تهانينا لقد  انتهيت من هذه الدورة بنجاح </h1>
                                                    <a href="{{ route('cert',['course_id'=>$course->id,'score'=> $scorse->first()->score]) }}">
                                                            <i class="fa fa-file-text-o" ></i>  عرض الشهاده 
                                                        </a>
                                                    </div>
                                    @else
                                    <div class="certf text-center animated bounceIn">
                                                            <h1>تهانينا لقد  انتهيت من هذه الدورة بنجاح </h1>
                                                        <a href="{{ route('test', $course->id) }}">
                                                                <i class="fa fa-file-text-o"></i> ابدا الاختبار الان
                                                            </a>
                                                        </div>
                                    @endif  
                              @endif
        @else
        @foreach($course->lessons as $lesson)
                                    
                        
                                    <li>
                                <a href="{{ route('video', $lesson->id) }}" class="lesson-det">
                                    <i class="fa fa-play-circle"></i>
                                    <span class="lesson-name">{{$lesson->title}}</span>
                                </a>     
                            </li>
                        
                        
                        
                                
                    @endforeach
    @endif
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