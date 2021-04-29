@extends('layouts.front')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <div class="up-box">
                        <div class="container">
                            <div class="up-form">

                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="up_form-item">
                                        
                                        <span id="error-form">من فضلك ادخل البيانات الصحيحة</span>
                                       <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <input name="name" type="text" placeholder="الإسم بالكامل">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input  name="username" type="text" placeholder="إسم المستخدم">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input  name="email"type="email" placeholder="البريد الإلكتروني">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input   name="password" type="password" placeholder="كلمة المرور">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input name="password_confirmation" type="password" placeholder="إعادة كلمة المرور">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input type="text" placeholder="رقم الهاتف">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <select  name="status">
                                            <option value="sa">السعوديه</option>
                                            <option value="eg">مصر</option>
                                        
                                   

                                        </select>
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <select  name="status">
                                            <option value="male">male</option>
                                            <option value="femail">female</option>
                                        </select>
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item text-right">
                                    
                                        <label>
                                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمتدرب</a>

                                        </label>
                                    </div>
                                    <!-- /.up_form-item -->



                                    <div class="policy text-right">
                                        <label class="text-right policy">
                                            <input type="checkbox">
                                            <span>هل انت موافق علي سياسة الخصوصية</span>
                                        </label>
                                    </div>
                                    <!-- /.policy -->
                                 
                                    <div class="up_form-item up-confirm">
                                        <input type="submit" value="تسجيل">
                                    </div>
                                    <!-- /.up_form-item -->
                                
                                </form>

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
            <!-- /.st-content -->
        </div>
        <!-- /st-pusher -->

    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->

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

    <!-- =========================================================================================================================================== -->

    <div class="panel-pop modal" id="teacher-modal">
        <div class="lost-inner">
            <h1>
                <i class="fa fa-cube"></i> تعرف علي سياسة الخصوصية كمدرب
            </h1>
            <div class="lost-item">
                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                </p>
            </div>
            <!-- /.lost-item -->

        </div>
        <!-- /.lost-inner -->
    </div>
@endsection