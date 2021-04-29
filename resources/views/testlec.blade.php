<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> العلوم العصرية للتدريب | إضافة اختبار جديد </title>
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

    <!-- start the loading screen -->

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper">
        <header>
            <div class="dividers">
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
                <span class="t4"></span>
                <span class="t5"></span>
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
                <span class="t4"></span>
                <span class="t5"></span>
            </div>
            <!-- /.dividers -->

            <div class="header-nav">
                <div class="container">
                    <div class="nav-right col-md-8 col-xs-12 pull-right">
                        <div class="logo">
                            <a href="index.html" title="العلوم العصرية للتدريب">
                                <img src="{{asset('images/logo.png')}}" alt="site-logo" width="110" height="70">
                            </a>
                        </div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.nav-logo -->
                    <div class="nav-left col-md-4 col-xs-12 pull-left">
                        <div class="user-controls">
                            <ul>
                        
                                <!--
                                <li>
    <a href="#">
        <i class="fa fa-user-plus"></i> تسجيل عضوية
    </a>
</li>
-->
                            </ul>
                        </div>
                        <!-- /.user-controls -->
                    </div>
                    <!-- /.nav-user -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.header-nav -->
        </header>

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
                        <div id="tabsleft" class="tabbable tabs-left">
                               @if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
          
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
                                            
                                   
                                       
                                       
                                            <!-- end answer -->
                                        </div>
                                        <!-- end quest-answers -->
                                    </div>
                                    <!-- end quest -->
                          @endforeach
                                <div  >
                                    

     <div class="btn btn-white btn-block">
                        <span>
                                   <a href="{{ route('addquestion', $course_id) }}" class="edit-course">
                                           <i class="fa fa-pencil"></i> اضافه سوال  </a>  
                        </span>
                    </div>
                


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
                                timer = duration;
                            }
                        }, 1000);
                    }

                    window.onload = function () {
                        var fiveMinutes = 60 * 5,
                            display = document.querySelector('#time');
                        startTimer(fiveMinutes, display);
                    };
</script>
    <!-- Javascript Files -->
    <script src="{{asset('js/bootstrap-checkbox.js')}}" type="text/javascript"></script>
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

    <script type="text/javascript">
        $(':checkbox').checkboxpicker({
            onLabel: 'Right',
            offLabel: 'Wrong'
        });
    </script>
</body>

</html>