@extends('layouts.front')

@section('content')


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
                    <li><a class="icon icon-data" href="index.html"><i class="fa fa-user"></i> الرئيسية</a></li>
                    <li><a id="sd" class="icon icon-location" href="about-us.html"><i class="fa fa-group"></i>من نحن</a></li>
                    <li><a class="icon icon-study" href="add-course-form.html"><i class="fa fa-plus"></i> اضافة دورة</a></li>
                    <li><a class="icon icon-photo" href="add-lecture.html"><i class="fa fa-plus"></i>اضافة محاضرة</a></li>
                    <li><a class="icon icon-wallet" href="add-test.html"><i class="fa fa-plus"></i>اضافة اختبار</a></li>
                    <li><a class="icon icon-data" href="all-courses.html"><i class="fa fa-database"></i>جميع الدورات</a></li>
                    <li><a class="icon icon-location" href="category-result.html"><i class="fa fa-rocket"></i>قسم معين</a></li>
                    <li><a class="icon icon-study" href="certif.html"><i class="fa fa-file"></i>شهادة التقدير</a></li>
                    <li><a class="icon icon-photo" href="contact-us.html"><i class="fa fa-phone"></i>اتصل بنا</a></li>
                    <li><a class="icon icon-wallet" href="course-alerts.html"><i class="fa fa-alerts"></i>التنبيهات</a></li>
                    <li><a class="icon icon-data" href="course-comments.html"><i class="fa fa-comments"></i>التعليقات</a></li>
                    <li><a class="icon icon-location" href="course-individual.html"><i class="fa fa-rocket"></i>درس معين</a></li>
                    <li><a class="icon icon-study" href="course-intro.html">مقدمة الدرس</a></li>
                    <li><a class="icon icon-photo" href="course-page.html">صفحة الدرس</a></li>
                    <li><a class="icon icon-wallet" href="profile1.html"><i class="fa fa-user"></i>الحساب الشخصي</a></li>
                    <li><a class="icon icon-data" href="reset-passowrd.html">تغير كلمة المرور</a></li>
                    <li><a class="icon icon-location" href="signup.html"><i class="fa fa-user-plus"></i>تسجيل حساب جديد</a></li>
                    <li><a class="icon icon-study" href="test-show.html">صفحة الاختبار</a></li>
                    <li><a class="icon icon-photo" href="trainer-privacy.html"><i class="fa fa-lock"></i>سياسة الخصوصية</a></li>
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
                            </div>
                            <!-- /.login-form -->
  

     
        </form>
    
                              
                            <div class="signup-form col-md-6 col-xs-12 text-right">
                                <h1>تسجيل عضوية جديدة</h1>
                                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                                <a href="{{ route('register') }}">
                                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                                </a>
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
                                        <img src="images/logo.png" alt="site-logo" width="110" height="70">
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
                                    <img src="images/comment-02.jpg" width="35" height="35" alt="User-Img">
                                </span>
                                                <b>{{ Auth::user()->name }}</b>
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <div class="drop drop-links col-xs-12">
                                                    <div class="drop-links">
                                                        <ul>
                                                            <li>
                                                                <a href="profile1.html">
                                                                    <i class="fa fa-user"></i>&nbsp; حسابي
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

                <div class="search-box">
                    <div class="container">
                        <div class="search-inner">
                            <h1 class="text-center">تستطيع من خلال موقعنا البحث  عن كل ما تريد من كورسات </h1>
                            <form action="#" method="get">
                                <div class="form-item col-xs-12">
                                    <div class="input-container col-md-10 col-xs-12 input-lft pull-right">
                                        <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
                                    </div>
                                    <!-- /.input-container -->
                                    <div class="btn-container col-md-1 btn-right">
                                        <a class="show-advanced">
                                    بحث متقدم
                                </a>
                                    </div>
                                    <!-- end btn-container -->
                                    <div class="btn-container col-md-1">
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <!-- end btn-container -->
                                </div>
                                <!-- /.form-item -->
                                <div class="form-advanced col-xs-12 adv-left">
                                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                                        <h2>ابحث بسعر الكورس</h2>
                                        <input type="text" placeholder="ابحث بإسم المدرس">
                                    </div>
                                    <!-- /.advanced-item -->
                                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                                        <h2>ابحث بسعر الكورس</h2>
                                        <input type="text" placeholder="ابحث بإسم الكورس">
                                    </div>
                                    <!-- /.advanced-item -->
                                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                                        <h2>ابحث بسعر الكورس</h2>
                                        <input type="text" placeholder="ابحث بنوع الكورس">
                                    </div>
                                    <!-- /.advanced-item -->
                                    <div class="advanced-item col-md-3 col-xs-12 adv-right pull-right">
                                        <h2>ابحث بسعر الكورس</h2>

                                        <input placeholder="من" type="number" class="pull-right price-from" data-toggle="tooltip" data-placement="top" title="مـن">
                                        <input placeholder="إلي" type="number" class="price-to" data-toggle="tooltip" data-placement="top" title="إلـي">
                                        <div class="text-right price-spec">
                                            <label id="ko">
                                                <input type="checkbox" class="price-free"> مجاني
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.advanced-item -->
                                </div>
                                <!-- /.form-advanced -->
                            </form>
                        </div>
                        <!-- /.search-inner -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.search-box -->

                <div class="courses">
                    <div class="container">
                        <div class="courses-head text-center">
                            <h1>أحدث الكورسات</h1>
                        </div>
                        <!-- /.testominal-head -->
                            @foreach ($alltags as $key => $tag)
                        <div class="row block-container">
                            <div class="courses-head text-center">
                                <h1>{{$tag->title}}</h1>
                            </div>

                        
                              @foreach ($tag->courses as $course) 
          
                            <div class="block col-md-4 col-sm-6">
                                <figure>
                                    <div><img src="images/b3.jpg" alt="img05" class="img-responsive"></div>
                                    <figcaption class="text-right">
                                        <h1> :اسم الكورس<span>  {{$course->title}}  </span></h1>
                                        <h1> :اسم المدرس<span>  {{$course->lecturer->name}}  </span></h1>
                                        <h1> :عدد الطلبة المشتركة<span>  {{count($course->users)}}  </span> </h1>
                                        <h1> :تاريخ بداية الكورس<span>  {{$course->start_at}}  </span></h1>
                                        <h1> :تقييم الكورس <span>30%</span></h1>
                                        <a href="{{ route('course_intro', $course->id) }}">
                                            <i class="fa fa-eye"></i> مشاهدة الكورس
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                              @endforeach  
                            
  
                           
                            <!-- /.block -->
                           
                                           <!-- /.block -->


                        </div>
                         @endforeach
                        <!-- /.row -->

                        <div class="all-courses text-center">
                            <a href="all-courses.html">عرض جميع الكورسات</a>
                        </div>
                        <!-- /.all-courses -->

                    </div>
                    <!-- /.conainer -->
                </div>
                <!-- /.courses -->

                <div class="testominal">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="testo-head text-center">
                            <h1>قالوا عنا</h1>
                        </div>
                        <!-- /.testominal-head -->
                        <div class="testo-slider text-center">
                            <div class="testo-item col-xs-12">

                                <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                                <div class="testo-img">
                                    <img src="images/comment-02.jpg" alt="" class="img-responsive">
                                </div>
                                <!-- /.testo-img -->
                                <h1>امير ناجح</h1>
                                <!-- /.testo-img -->
                            </div>
                            <!-- /.testo-item -->
                            <div class="testo-item col-xs-12">

                                <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                                <div class="testo-img">
                                    <img src="images/comment-02.jpg" alt="" class="img-responsive">
                                </div>
                                <!-- /.testo-img -->
                                <h1>امير ناجح</h1>
                                <!-- /.testo-img -->
                            </div>
                            <!-- /.testo-item -->

                            <div class="testo-item col-xs-12">

                                <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                                <div class="testo-img">
                                    <img src="images/comment-02.jpg" alt="" class="img-responsive">
                                </div>
                                <!-- /.testo-img -->
                                <h1>امير ناجح</h1>
                                <!-- /.testo-img -->
                            </div>
                            <!-- /.testo-item -->

                            <div class="testo-item col-xs-12">

                                <p>مستمداً ثروة الجامعات العلمية، وفضاء الإنترنت في تجاوز عقبات الزمان والمكان، أُعلن أخيرا ً عن انطلاق موقع على الإنترنت يتيح لمرتاديه دراسة موضوعات مختلفة في دورات قصيرة بطريقة تفاعلية، أملاً في إثراء المحتوى العربي على الإنترنت وسعياً لنشر المعرفة في المجتمعات العربية.</p>
                                <div class="testo-img">
                                    <img src="images/comment-02.jpg" alt="" class="img-responsive">
                                </div>
                                <!-- /.testo-img -->
                                <h1>امير ناجح</h1>
                                <!-- /.testo-img -->
                            </div>
                            <!-- /.testo-item -->
                        </div>
                        <!-- /. testo-slider -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.testominal -->

                <footer>
                    <div class="container">
                        <div class="footer-sub col-md-2 col-xs-12 text-center pull-right">
                            <ul>
                                <li>
                                    <a href="about-us.html">من نحن</a>
                                </li>

                                <li>
                                    <a href="contact-us.html">إتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end footer-sub -->
                        <div class="copyrights col-md-8 col-xs-12 text-center pull-right">
                            <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
                        </div>
                        <!-- /.copyrights -->
                        <div class="footer-links col-md-2 col-xs-12 pull-left text-center">
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
            <!-- /st-content -->
        </div>
    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->
@endsection
<x-guest-layout>

</x-guest-layout>