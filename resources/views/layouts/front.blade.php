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

    <!-- start the loading screen -->
    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper st-container" id="st-container">
        <!-- content push wrapper -->
        <div class="st-pusher">

            <nav class="st-menu st-effect-8" id="menu-8">
                <h2 class="icon icon-stack">
                    <img src="images/logo.png" class="img-responsive">
                </h2>
                <ul>
                    <li><a class="icon icon-data" href="{{ route('courses') }}"><i class="fa fa-user"></i> الرئيسية</a></li>
                    <li><a id="sd" class="icon icon-location" href="{{ route('about-us') }}"><i class="fa fa-group"></i>من نحن</a></li>
                    <li><a class="icon icon-photo" href="{{ route('contact-us') }}"><i class="fa fa-phone"></i>اتصل بنا</a></li>

                    <li><a class="icon icon-study" href=""><i class="fa fa-file"></i>شهادة التقدير</a></li>
                </ul>
            </nav>
            <div class="st-content">
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

                <div id="st-trigger-effects" class="column">

                    <button data-effect="st-effect-8" class="st_show">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <header>
                    <div class="error-detect">
                        <div class="container">
                            <div class="error text-center">
                                <h1 class="danger-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                                <h1 class="message-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                                <h1 class="success-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                            </div>
                            <!-- /.error-danger -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.error-detect -->

                    <div class="login-area">
                        <div class="container">
                            <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                            
        

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

          <h1>تسجيل الدخول</h1>
                                <div class="login-item">
                                    <input  id="email"  type="text" name="email" :value="old('email')" required autofocus placeholder="إسم المستخدم">

           
                                </div>
                                <!-- /.login-item -->
                                <div class="login-item">
                                    <input  placeholder="كلمة السر" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" >
                                    
                                </div>
                                <!-- /.login-item -->
                                <div class="login-item">
                               
                                                            
                                        <label for="remember_me" >
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">تذكر كلمة السر دائماً</span>
                                        </label>
                                
                                                        
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                هل نسيت كلمة المرور ؟
                                            </a>
                                        @endif

            
        
                                </div>
                                
                                <!-- /.login-item -->
                                <div class="login-item">
                                    <input type="submit" value="دخول">
                                </div>
                                <!-- /.login-item -->
                                 <div class="login-item">
                                      <a  href="{{route('lecturer.login') }}"  style="color:green" class="show-privacy2">
                                                 تسجيل الدخول كمدرب
                                             </a> 
                                </div>
                            </div>
                            <!-- /.login-form -->
  

     
        </form>
    
                              
                            <div class="signup-form col-md-6 col-xs-12 text-right">
                                <h1>تسجيل عضوية جديدة</h1>
                                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                                <a href="{{ route('register') }}">
                                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                                </a>
                     <a href="{{route('lectuer.register') }}" data-toggle="tooltip" data-placement="top" title="lecturer">
                                      
                                   تسجيل مدرب جديد </a>
                                      
                            </div>
                            <!-- /.signup-form -->

                            <!-- =========================================================================================================================================== -->

                            <div class="panel-pop modal" id="forget">
                                <div class="lost-inner">
                                    <h1>هل نسيت كلمة المرور ؟</h1>
                                    <div class="lost-item">
                                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
                                    </div>
                                    <!-- /.lost-item -->
                                    <div class="text-center">
                                        <input type="submit" value="إعادة ضبط">
                                    </div>
                                    <!-- /.lost-item -->
                                </div>
                                <!-- /.lost-inner -->
                            </div>
                            <!-- /.modal -->

                            <!-- =========================================================================================================================================== -->

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.login-area -->


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
                                                                   
                    @auth
                        @if (App::isLocale('en')) 
                               <li> <a rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL( 'ar', null, [], true) }}">
                             {{ __('auth.ar') }}
                            </a></li>              
                                 @else
                               <li> <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL( 'en', null, [], true) }}">
                               {{ __('auth.en') }}
                            </a></li>                
                               @endif
                          
        
                             <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                                <span class="cont-img">
                                    <img src="{{asset('images/comment-02.jpg')}}" width="35" height="35" alt="User-Img">
                                </span>
                                                <b>{{ Auth::user()->name }}</b>
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <div class="drop drop-links col-xs-12">
                                                    <div class="drop-links">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('mycourses') }}">
                                                                    <i class="fa fa-user"></i>&nbsp; كورساتى
                                                                </a>
                                                            </li>
                                                             <li>
                                                                <a href="{{ route('mytags') }}">
                                                                    <i class="fa fa-user"></i>&nbsp; مجالاتى
                                                                </a>
                                                            </li>
                                                    <li>
                                                    <form method="POST"  action="{{ route('logout') }}">
                                                        @csrf
                                                                 <a href="route('logout')"  onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                                    <i class="fa fa-power-off"></i>&nbsp; {{ __('Log out') }}
                                                                </a>
                                                    
                                                    </form>
                                                    </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end drop-links -->
                                                </div>
                                                <!-- end drop -->
                                            </ul>
                                        </li>

                                @else
                                        
                                                <li>
                                                        <a href="#" class="show-login">
                                                            <i class="fa fa-user"></i> منطقة تسجيل الدخول
                                                        </a>
                                    
                                                
                                  
                                                    </li>
                        
                                @endauth
                

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
                <!-- /header -->
@yield('content')

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