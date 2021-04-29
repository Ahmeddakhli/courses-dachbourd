<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> العلوم العصرية للتدريب </title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Css Files -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/selectric.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('images/favicon.png')}}" rel="icon" type="text/css">
        <link href="{{asset('css/video-js.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<div class="intro-container">
            <div class="intro-head text-center">
                <div class="container">
                    <h1>
                       
                       {{$course->title}} مقدمة في كورس 
                         
                    </h1>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.intro-head -->
            <div class="intro-box">
                <div class="container">
           @if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
                    <div class="intro-name text-right">

                        <div class="name-head col-md-7 col-xs-12 pull-right">
                        @if (count($course->lessons) > 0)
                      <a href="{{ route('course_page', $course->id) }}">
                           <h1>{{$course->lessons->First()->title}}</h1>
                          </a> 
                               
                        @else
                         <h1>لا يوجد</h1>

                            
                        @endif
                        </div>
                        <?php use App\Models\User; $orders= User::find(Auth::user()->id)->orders->where('course_id',$course->id); 
        ?> 
       
                        <div class="extras col-md-5 col-xs-12">
                            <span>$ {{$course->course_mony}}</span>
                             @if(count($orders)>0)
                                          <a href="{{ route('course_page', $course->id) }}"> <span>عرض محتويات الكورس</span></a>
                            @else
                     <span>يجب الاشتراك لعرض الكورس </span>

                            @endif
                            <!-- end intro-rating -->
                        </div>
                    </div>
                    <!-- /.intro-name -->
                 <div class="intro-video col-xs-12 text-center">
                        <!--                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/tTgD9m1p5Ss?list=PLT56sSeAKiIvfQhsA2lXUUmjfh0JyEFU7" frameborder="0" allowfullscreen></iframe>-->
                        <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="520" poster="{{asset('images/3lom.jpg')}}">
                            <source src="{{asset('images/test.mp4')}}" type='video/mp4' />
                        </video>
                    </div>
                    <!-- /.intro-video -->
                    <div class="intro-date col-xs-12 text-right">
                        <h1>
            <i class="fa fa-calendar"></i>
            من : 01 فبراير 2016 إلى : 27 ابريل 2016 (12 اسبوع)
        </h1>
        
    
  @if (! count($orders)>0)
    
 
        <a href="#" class="show-credit">
                                    <i class="fa fa-paper-plane"></i> إشترك في الدورة
                                </a>
  @endif      



              
       
                     
                    </div>
                    <!-- /.intro-date -->
                    <div class="intro-details text-right">
                        <p>هذه المادة هي مقدمة لعلم البرمجة باستخدام لغة جافا. في هذه المادة ستتعلم البرمجة من الصفر دون الحاجة لخلفية مسبقة. هذه المادة مناسبة لجميع الأعمار من المرحلة المتوسطة فما فوق. هذه المادة ستكون أساس يتعلم فيه الطالب أساسيات علم البرمجة ولغة جافا لكي يكون قادرا فيما بعد على البرمجة بلغة جافا على جوالات أندرويد أو برمجة تطبيقات الويب والانترنت.
                        </p>
                    </div>
                    <!-- /.intro-details -->

                    <div class="intro-extra col-xs-12">
                        <div class="intro-instructor col-md-6 col-xs-12 text-right pull-left">
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
                            <!-- /.intro_instructor-inner -->
                        </div>
                        <!-- /.intro-instructor -->
                        <div class="intro-lec col-md-6 col-xs-12 text-right pull-right">
                            <div class="intro_lec-inner">
                                <h1>      
                       {{$course->title}} 
                          ماذا يحتوي هذا الكورس</h1>
  
                        <ol>
                            
  @if(count( $course->lessons)>0)
         @foreach($course->lessons as $lesson)
                                    
                        
                                    <li>
                                    <i class="fa fa-play-circle"></i>
                                    <span class="lesson-name">{{$lesson->title}}</span>
                            </li>
                        
                        
                        
                                
                    @endforeach
     
 
@else
<li>  لايوجد دروس</li>


@endif
                            
                     
                            
                                
                                </ol>
                            </div>
                            <!-- /.intro_lec-inner -->
                        </div>
                      
                        <!-- /.intro-lec -->
                    </div>
                    <!-- /.intro-extra -->

                </div>
                <!-- /.container -->
            </div>
            <!-- /.intro-box -->
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

    <!-- =========================================================================================================================================== -->

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

    <!-- =========================================================================================================================================== -->


    <div class="panel-pop modal" id="payment">
        <div>
            <h1>
                <i class="fa fa-shopping-cart"></i>
                تأكيد الاشتراك في الكورس
            </h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
               <li role="presentation">
                    <a href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab">
                        <i class="fa fa-paypal"></i> Paypal
                    </a>
                </li>
                <li role="presentation"   class="active">
                    <a href="#credit-card" aria-controls="credit-card" role="tab" data-toggle="tab">
                        <i class="fa fa-credit-card"></i>Credit Card
                    </a>
                </li>
             
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active" id="credit-card">...</div>
                <div role="tabpanel" class="tab-pane fade" id="paypal">
                    <div class="paypal-box text-center">
                     
                          <form action="{{route('paypal_call')}}" method="post">
                        @csrf
                        <input type="hidden" name="price" value="{{$course->course_mony}}"/>
                        <input type="hidden" name="courseid" value="{{$course->id}}"/>

                            <button type="submit" class="">   <a >تأكيد الدفع من خلال البايبال</a></button>
                    </form>
                    </div>
                    <!-- end paypal-box -->
                </div>
            </div>

        </div>
    </div>
    <!-- /.modal -->

    <!-- =========================================================================================================================================== -->
  <script type="text/javascript">
        var myPlayer = videojs("example_video_1");

        $('#show-l10').click(function () {
            $('#l10').show();
            $('#example_video_1').hide();
            myPlayer.pause();
        });
    </script>

    <!-- Javascript Files -->
    <script src="{{asset('js/jquery-2.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/html5shiv.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-smoothscroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/modernizr.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/placeholdem.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/toucheffects.js')}}"></script>
    <script src="{{asset('js/jquery.selectric.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/classie.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/video.js')}}" type="text/javascript"></script>

</body>

</html>