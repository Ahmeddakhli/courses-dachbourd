@extends('layouts.lecturer')

@section('content')

            <div class="header-nav">
                <div class="container">
                    <div class="nav-right user_nav-right col-md-6 col-xs-12 pull-right">

                        <div class="logo">
                            <a href="index.html" title="العلوم العصرية للتدريب">
                                <img src="{{asset('images/logo.png')}}" alt="site-logo" width="110" height="70">
                            </a>
                        </div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.nav-logo -->
                    <div class="nav-left user_nav-left col-md-6 col-xs-12 pull-left">
                        <div class="user-logged">
                            <ul>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                        <span class="cont-img">
                                    <img src="{{asset('images/comment-02.jpg')}}" width="35" height="35" alt="User-Img">
                                </span>
                                        <b>{{ auth()->guard('lecturer')->user()->name }}</b>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <div class="drop drop-links col-xs-12">
                                            <div class="drop-links">
                                                <ul>
                                                 
                                                    <li>
                                                                      <a href="{{route('lecturerLogout') }}" >
                                                            <i class="fa fa-power-off"></i>&nbsp; خروج
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- end drop-links -->
                                        </div>
                                        <!-- end drop -->
                                    </ul>
                                </li>
                           
                                 
                                </li>

                            </ul>
                        </div>
                        <!-- /.user-controls -->
                    </div>
                    <!-- /.nav-user -->

                </div>
                <!-- /.container -->
           
                <!-- /.input-container -->
            </div>
            <!-- /.header-nav -->

        </header>
        <!-- /header -->

        <div class="profile-content empty-course">
            <div class="container">
                <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                    <div class="right_box-inner">
                        <!-- Nav tabs -->
                        <a class="toggle-slidenav hidden-xs hidden-sm">
                            <i class="fa fa-close"></i>
                        </a>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">

                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                    <i class="fa fa-user"></i> الملف الشخصي
                                </a>
                            </li>
                      
                            <li role="presentation">
                                <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">
                                    <i class="fa fa-database"></i> الدورات
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab">
                                    <i class="fa fa-diamond"></i> الاهتمامات
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab">
                                    <i class="fa fa-file-text-o"></i> السيرة الذاتية
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('about-us') }}">
                                    <i class="fa fa-file-text-o"></i> من نحن
                                </a>
                            </li>
                                <li>
                                <a href="{{ route('contact-us') }}">
                                    <i class="fa fa-file-text-o"></i> اتصل بنا 
                                </a>
                            </li>
                                <li>
                                <a href="{{ route('courses') }}">
                                    <i class="fa fa-file-text-o"></i> الرئيسيه 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.right_box-inner -->
                </div>
                <!-- /.right_tap-box -->

                <div class="mobile_tap-box col-md-12 col-xs-12 hidden-lg text-center">
                    <div class="right_box-inner">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">

                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="الملف الشخصي">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#password" aria-controls="password" role="tab" data-toggle="tab" title="كلمة المرور">
                                    <i class="fa fa-lock"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab" title="الدورات">
                                    <i class="fa fa-database"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab" title="الاهتمامات">
                                    <i class="fa fa-diamond"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab" title="السيرة الذاتية">
                                    <i class="fa fa-file-text-o"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab" title="تصفح الدورات">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab" title="دوراتي كمتدرب">
                                    <i class="fa fa-folder-open-o"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.right_box-inner -->
                </div>
                <!-- /.mobile_tap-box -->

                <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                    <div class="left_box-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in  active" id="home">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-user"></i>
                                        الملف الشخصي
                                        <a class="edit-personal">
                                            <i class="fa fa-cog"></i>
                                            تعديل البيانات
                                        </a>
                                        <button class="cancel-personal" type="reset">
                                            <i class="fa fa-times"></i>
                                            إلغاء التعديل
                                        </button>
                                    </h1>
                                </div>
                                <!-- /.home-head -->

                                <div class="home_img  text-center">
                                    <div class="home_img-inner">
                                        <div class="left-caption col-xs-12">
                                            <div class="imgcontent col-xs-12">
                                                <div class="bstext">
                                                    <span>
                                          <i class="fa fa-camera"></i><br>
                                          Upload an image
                                      </span>
                                                </div>
                                                <!-- /.bstext -->
                                                <output id="list"></output>
                                                <input type="file" id="show-adj8" name="myFileSelect">
                                            </div>
                                            <!-- /.imgcontent -->
                                        </div>
                                        <!-- /.Fption -->
                                        <img src="images/s.png" alt="" width="150" height="150">
                                    </div>
                                </div>
                                <!-- /.home_img -->
                                <div class="home-content">

                                    <div class="home_data col-md-10 col-sm-10 col-xs-12 text-right">
                                        <form action="#" method="get">
                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-user-secret"></i>
                                                    <h1>الإسم بالكامل</h1>
                                                    <input type="text" id="edit-area" placeholder="الإسم بالكامل">
                                                    <span>{{ auth()->guard('lecturer')->user()->name }}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-user"></i>
                                                    <h1>إسم المستخدم</h1>
                                                    <input type="text" id="edit-area" placeholder="إسم المستخدم">
                                                    <span>{{ auth()->guard('lecturer')->user()->username }}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->
                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-phone"></i>
                                                    <h1>رقم الهاتف</h1>
                                                    <input type="text" id="edit-area" placeholder="رقم الهاتف">
                                                    <span>{{ auth()->guard('lecturer')->user()->phone }}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-envelope"></i>
                                                    <h1>البريد الإلكتروني</h1>
                                                    <input type="email" id="edit-area" placeholder="البريد الإلكتروني">
                                                    <span>{{ auth()->guard('lecturer')->user()->email }}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->
                                            <div class="home_data-item col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-globe"></i>
                                                    <h1>الدولة</h1>
                                                    <input type="text" id="edit-area" placeholder="الدولة">
                                                    <span>{{ auth()->guard('lecturer')->user()->country }}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->
                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-male"></i>
                                                    <h1>الجنس</h1>

                                                    <span>{{ auth()->guard('lecturer')->user()->sex}}</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->
                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-globe"></i>
                                                    <h1>مدرب / متدرب</h1>
                                                    <input type="text" id="edit-area" placeholder="مدرب / متدرب">
                                                    <span>متدرب</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-graduation-cap"></i>
                                                    <h1> المؤهل</h1>
                                                    <input type="text" id="edit-area" placeholder="المؤهل">
                                                    <span>دكتوراة في الهندسة</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-briefcase"></i>
                                                    <h1>التخصص</h1>
                                                    <input type="text" id="edit-area" placeholder="التخصص">
                                                    <span>-------</span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-cogs"></i>
                                                    <h1>مجال العمل</h1>
                                                    <select id="edit-area">
                                                        <option>هندسة هندسة</option>
                                                        <option>هندسة هندسة</option>
                                                        <option>هندسة هندسة</option>
                                                        <option>هندسة هندسة</option>
                                                    </select>
                                                    <span>مهندس </span>
                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-set col-md-12 col-sm-12  col-xs-12 pull-right">
                                                <input type="submit" class="confirm-set" value="حفظ التعديلات">
                                            </div>
                                            <!-- /.home_data-item -->
                                        </form>
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="password">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-lock"></i>
                                        كلمة المرور
                                    </h1>
                                    <a class="edit-password">
                                        <i class="fa fa-cog"></i> تعديل البيانات
                                    </a>
                                    <button class="cancel-password" type="reset">
                                        <i class="fa fa-times"></i> إلغاء التعديل
                                    </button>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-lock"></i>
                                                <h1>كلمة المرور القديمة</h1>
                                                <input type="text" id="edit-area">
                                                <span>......</span>

                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-unlock"></i>
                                                <h1>كلمة المرور الجديدة</h1>
                                                <input type="text" id="edit-area">
                                                <span>.........</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->

                                        <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                            <div>
                                                <i class="fa fa-lock"></i>
                                                <h1>إعادة كتابة كلمة المرور الجديدة</h1>
                                                <input type="text" id="edit-area">
                                                <span>............</span>
                                            </div>
                                        </div>
                                        <!-- /.home_data-item -->
                                        <div class="home_data-item all-pass col-md-12 col-sm-12  col-xs-12 pull-right">
                                            <input type="submit" value="حفظ التعديلات" class="confirm-set-password">
                                        </div>
                                        <!-- /.home_data-item -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="courses">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-database"></i>
                                        الدورات
                                    </h1>
                                    <a class="add1_course" href="{{ route('addcourse') }}">
                                        <i class="fa fa-plus"></i>إضافة دورة
                                    </a>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content  pass-content col-xs-12">
                                    <div class="home_data col-md-12 pull-right text-right">
                                        <div class="shop-wrapper col-xs-12">


                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @php
                                            $lecturer=auth()->guard('lecturer')->user();
                                            
                                            @endphp
      @foreach ( $lecturer->courses as  $course)
                                                
                                           
                        <div class="panel panel-default">
                            <div class="panel-heading" role="button" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title"><a><h5><i class="fa fa-group"></i> {{ count($course->orders)}} </h5>
                                  {{ $course->title }}   </a>
                                </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="instructor-control text-center">
                                                <form action="{{ route('courses.destroy',$course->id) }}" method="post">
                                                                @csrf
                                                                {{method_field('delete')}}   
                                                                <button class='btn btn-danger delete-course' onclick="return confirm('Are you sure?you want to delete this فكر تانى ')"> <i class="fa fa-trash"></i> حذف الدورة</button>
                                                                            <a href="{{ route('addtest', $course->id) }}" class="edit-course">
                                                                    <i class="fa fa-pencil"></i> الاختبار 
                                                                </a>    
                                                                                        <a href="{{ route('addlec',['id'=>$course->id]) }}" >
                                                                    <i class="fa fa-plus"></i> إضافة محاضرة
                                                                </a>
                     

                                                                <!-- =========================================================================================================================================== -->
                                                                <a href="" class="edit-course">
                                                                    <i class="fa fa-pencil"></i> تعديل الدورة
                                                                </a>
                                                                <a href="#" class="add-alert-form">
                                                                    <i class="fa fa-bullhorn"></i> إضافة تنويه
                                                                </a>
                                                            <a href="{{ route('course_lesson', $course->id) }}" class="edit-course">
                                                                <i class="fa fa-tasks"></i> الدروس
                                                            </a>
                            
                                                              </form>
                        

                                                                <!-- =========================================================================================================================================== -->

                                                                <div class="panel-pop modal" id="alert-all">
                                                                    <div class="lost-inner">
                                                              <form method="get" action="{{ route('mail',$course->id ) }}">
                                                                 @csrf
                                                                        <h1>
                                                                            <i class="fa fa-envelope"></i>
                                                                            ارسال بريد الكترونى  للطلاب المشتركين في الدورة
                                                                        </h1>
                                                                        <div class="lost-item" id="alert-item">
                                                                            <input type="text" name="title" placeholder="عنوان البريد">
                                                                        
                                                                        </div>
                                                                        <!-- /.lost-item -->
                                                                        <div class="lost-item" id="alert-item">
                                                                            <textarea  name="body" placeholder="مضمون البريد"></textarea>
                                                                        </div>
                                                                        <!-- /.lost-item -->
                                                                        <div class="text-center">
                                                                            <input type="submit"  value="ارسال للجميع">
                                                                        </div>
                                                                        <!-- /.lost-item -->
                                                                        </form>
                                                                    </div>
                                                                    <!-- /.lost-inner -->
                                                                </div>
                                                                <!-- /.modal -->

                                                                <!-- =========================================================================================================================================== -->
                                                               
                                                            </div>
                                                            <!-- /.instructor-control -->
                                                            <ul>
                                                                <li>
                                                                    <h1>
                                                                        <label>الوصف</label>
                                                                        <span class="par">
                                                                    {{ $course->description}}    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>المجال</label>
                                                                        <span>@foreach ( $course->tags as $tag )
                                                                           {{ $tag->title}} | 
                                                                        @endforeach </span>
                                                                    </h1>
                                                                </li>

                                                                <li>
                                                                    <h1>
                                                                        <label>عدد المشتركين في الدورة</label>
                                                                        <span> {{ count($course->orders)}}   </a></span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>الحالة</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>نشرت / لم تنشر</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>الشهادة</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>السعر</label>
                                                                        <span>   {{ $course->course_mony}} </span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>التاريخ</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                             
                                                          
                                                            </ul>
                                                        </div>
                                                        <!-- /.panel-body -->

                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                 
 @endforeach
                                            </div>
                                            <!-- /.panel-group -->


                                        </div>
                                        <!-- end shop-wrapper -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cv">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-file"></i>
                                        أضف ملف سيرتك الذاتية
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                            <div>
                                                <form class="cv-file">
                                                    <h1>أضف رابط خارجي لملف السيرة الذاتية</h1>
                                                    <input type="url" placeholder="رابط خارجي">
                                                    <h1>او يمكنك كتابتها بنفسك من خلال</h1>
                                                    <textarea placeholder="اكتب سيرتك الذاتية"></textarea>
                                                    <input type="submit" value="حفظ">
                                                    <a class="show-cv">عرض ملف السيرة الذاتية</a>
                                                </form>
                                            </div>
                                            <div class="cv-container text-center">
                                                <p>Enthusiastically deliver global information whereas empowered methodologies. Completely supply transparent web services vis-a-vis global internal or "organic" sources. Globally administrate long-term high-impact ROI before intermandated.</p>
                                                <a href="#">
                                                    <i class="fa fa-cloud-download"></i> تحميل ملف السيرة الذاتية
                                                </a>
                                            </div>
                                            <!-- /.cv-container -->
                                        </div>
                                        <!-- /.home_data-item -->



                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="interests">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-diamond"></i>
                                        الاهتمامات
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="interest-show">
                                            <ul>
                                        
                                                @foreach ($lecturer->tags as $tag )
                                             
                                                <li>
                                                    <span class="inter-item">{{ $tag->title}}
                                                     <a href="{{route('deltag',$tag->id) }}"> <i class="fa fa-times" id="del-item"></i> </a>
                                                    </span>
                                                </li>
                                                   @endforeach
                                          
                                            </ul>
                                        </div>
                                        <!-- /.interest-show -->
                                        <div class="add-interest">
                                            <a>
                                                <i class="fa fa-plus"></i> أضف اهتمامات أخري
                                            </a>
                                        </div>
                                        <!-- /.add-interest -->
                                        <div class="home_data-item col-md-12  col-xs-12 pull-right">

                                            <div class="interest-cont col-xs-12">
                                            @php
                                
                                                $tags= App\Models\Tag::all();
                                            @endphp
                                               <form method="get" action="{{ route('addtag') }}">
            @csrf
                                    @foreach ($tags as $tag )
                                        
                                 
                                                
                                        
                                                <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                                                    <label>
                                                        <input type="checkbox" value="{{$tag->id}}" name="tags[]">
                                                        <span>{{ $tag->title}}</span>
                                                    </label>
                                                </div>
                                        
                                                <!-- /.interest-item -->

                                      @endforeach
                    <input  name="id"  type="hidden"   value="{{auth()->guard('lecturer')->user()->id}}">

                                                                 <x-button class="ml-3">
                حقظ الاهتمامات
                </x-button>

        </form>
                                            </div>
                                            <!-- /.interest-cont -->
           
                                            <!-- /.interest-gender -->
                                        </div>
                                        <!-- /.home_data-item -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="all-courses">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-eye"></i>
                                        جميع الدورات
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="my_courses-container">
                                            <div>

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#current" aria-controls="current" role="tab" data-toggle="tab">الدورات الحالية</a></li>
                                                    <li role="presentation"><a href="#comming" aria-controls="comming" role="tab" data-toggle="tab">الدورات الحالية</a></li>

                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active" id="current">
                                                        <div class="type col-xs-12">
                                                            <div class="filtered-head text-right">
                                                                <h1>
                                                                <i class="fa fa-tags"></i>
                                                                علوم حاسب
                                                            </h1>
                                                            </div>
                                                            <!-- /.filtered-head -->
                                                            
                                                            <!-- /.card -->

                                                            <div class="card col-md-6 col-xs-12 pull-right">
                                                                <div class="card-inner">
                                                                    <span class="corse-type">جافا سكربت</span>
                                                                    <div class="card-img">
                                                                        <img src="images/b3.jpg" alt="" class="img-responsive">
                                                                        <div class="lessons-number text-center">
                                                                            <h1>
                                                                            <i class="fa fa-play-circle"></i>
                                                                            100
                                                                        </h1>
                                                                        </div>
                                                                        <!-- /.lessons-number -->
                                                                    </div>
                                                                    <!-- /.card-img -->
                                                                    <div class="card-data">
                                                                        <div class="course_name text-right">
                                                                            <h1>
                                                                                <a href="#">البرمجة بدون كود </a>
                                                                            </h1>
                                                                        </div>
                                                                        <!-- /.course-name -->
                                                                        <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                من 01 فبراير 2016 إلى 30 مايو 2016
                                                                            </span>
                                                                        </div>
                                                                        <!-- /.course_setting -->
                                                                        <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="{{asset('images/s.png')}}" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                                            <a href="#">
                                                                                <i class="fa fa-user"></i> أمير ناجح الدسوقي
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.course_instructor-data -->
                                                                    </div>
                                                                    <!-- /.card-data -->

                                                                </div>
                                                                <!-- /.card-inner -->
                                                            </div>
                                                            <!-- /.card -->

                                                            <div class="card col-md-6 col-xs-12 pull-right">
                                                                <div class="card-inner">
                                                                    <span class="corse-type">جافا سكربت</span>
                                                                    <div class="card-img">
                                                                        <img src="images/b3.jpg" alt="" class="img-responsive">
                                                                        <div class="lessons-number text-center">
                                                                            <h1>
                                                                            <i class="fa fa-play-circle"></i>
                                                                            100
                                                                        </h1>
                                                                        </div>
                                                                        <!-- /.lessons-number -->
                                                                    </div>
                                                                    <!-- /.card-img -->
                                                                    <div class="card-data">
                                                                        <div class="course_name text-right">
                                                                            <h1>
                                                                                <a href="#">البرمجة بدون كود </a>
                                                                            </h1>
                                                                        </div>
                                                                        <!-- /.course-name -->
                                                                        <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                من 01 فبراير 2016 إلى 30 مايو 2016
                                                                            </span>
                                                                        </div>
                                                                        <!-- /.course_setting -->
                                                                        <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="{{asset('images/s.png" width="70')}}" height="70" class="img-responsive">
                                                                            </span>
                                                                            <a href="#">
                                                                                <i class="fa fa-user"></i> أمير ناجح الدسوقي
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.course_instructor-data -->
                                                                    </div>
                                                                    <!-- /.card-data -->

                                                                </div>
                                                                <!-- /.card-inner -->
                                                            </div>
                                                            <!-- /.card -->
                                                        </div>
                                                        <!-- /.type -->
                                                       
                                            </div>
                                        </div>
                                        <!-- /.my_courses-container -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="my_courses">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-folder-open-o"></i>
                                        دوراتي
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="my_courses-container">
                                            <div>

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#currentmy" aria-controls="current" role="tab" data-toggle="tab">الدورات الحالية</a></li>
                                                    <li role="presentation"><a href="#commingmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات القادمة</a></li>
                                                    <li role="presentation"><a href="#finishedmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات المنتهية</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                       <div class="tab-content">

                                    
                                                    <!-- ///////////////#currentmy -->
                                                    <div role="tabpanel" class="tab-pane fade" id="commingmy">
                                                        <div class="flash_empty text-center">
                                                            <h1 class="animated shake">
                                                                <i class="fa fa-frown-o"></i>
                                                                عفواً لا يوجد لديك دورات في هذا القسم
                                                            </h1>
                                                        </div>
                                                        <!-- /.flash_empty -->
                                                    </div>
                                                    <!-- /#commingmy -->
                                                    <div role="tabpanel" class="tab-pane fade" id="finishedmy">
                                                        <div class="flash_empty text-center">
                                                            <h1 class="animated shake">
                                                                <i class="fa fa-frown-o"></i>
                                                                عفواً لا يوجد لديك دورات في هذا القسم
                                                            </h1>
                                                        </div>
                                                        <!-- /.flash_empty -->
                                                    </div>
                                                    <!-- /#finishedmy -->
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.my_courses-container -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                        
                        </div>
                        <!-- /.tap-content -->
                    </div>
                    <!-- /.left_tap-box -->
                </div>
                <!-- /.left_tap-box -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.profile-content -->

     

    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
@endsection
