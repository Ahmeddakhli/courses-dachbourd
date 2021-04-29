@extends('layouts.front')

@section('content')
 <div class="up-header text-center">
                        <div class="container">
                            <h1>يرجي تسجيل حساب جديد</h1>
                        </div>
                        <!-- /.container -->
                    </div>
   

 <div class="up-box">
                        <div class="container">
                            <div class="up-form">

                                <form  method="POST" action="{{ route('storeregister') }}">
                                    @csrf
                                    <div class="up_form-item">
                                     
                                               <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    </div>
                                    <!-- /.up_form-item -->
                                  <div class="up_form-item">
                                             <!-- Name -->
                                        <div>
                                            <x-label for="name" value="الإسم بالكامل" />
                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                        </div>

                                        <!-- user Name -->
                                        </div>
                                         <div class="up_form-item">
                                        <div>

                                            <x-label for="username" value="إسم المستخدم" />

                                            <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                                        </div>
                              
                                 </div>  
                          
                             
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                          <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="email" value="البريد الإلكتروني" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <input placeholder="">
                                                <!-- Password -->
                                        <div class="mt-4">
                                            <x-label for="password" value="كلمة المرور" />

                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                                            
                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-label for="password_confirmation" value="إعادة كلمة المرور" />

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password_confirmation" required />
                                        </div>
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                                <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="phone" value="رقم الهاتف" />

                                            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required />
                                        </div>

                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                      <div class="mt-4">
                                            <x-label for="phone" value="اختر الدوله" />
                                     <select  name="country">
                                            <option value="sa">السعوديه</option>
                                            <option value="eg">مصر</option>
                                        
                                   

                                        </select>
                                       </div>
                                   
                                    </div>
                                    <!-- /.up_form-item -->
                                       <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                      <div class="mt-4">
                                            <x-label for="phone" value="اختر النوع" />
                                     <select  name="sex">
                                            <option value="male">ذكر</option>
                                            <option value="female">انثى</option>
                                        
                            

                                        </select>
                                       </div>
                                   
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item text-right">
                                    
                                        <label>
                                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمتدرب</a>
                                         
                                        </label>
                                                <label>
                                                  <a  href="{{route('lecturer.login') }}"  style="color:green" class="show-privacy2">
                                                  "امتلك حساب بالفعل"تسجيل الدخول 
                                             </a>                                         
                                        </label>
                                          
                                    </div>
                                    <!-- /.up_form-item -->



                                    <div class="policy text-right">
                                        <label class="text-right policy">
                                            <input type="checkbox">
                                            <span>هل انت موافق علي سياسة الخصوصية</span>
                                            <span></span>
                                            
                                        </label>
                                        

                                    </div>
                                    

                                    <!-- /.policy -->
                                 
                                    <div class="up_form-item up-confirm">
                                        <input type="submit" value="تسجيل">
                                    </div>
                                          <a href="{{route('register') }}" data-toggle="tooltip" data-placement="top" style="color:blue" title="lecturer">
                                      
                                   register as student </a>
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
<x-guest-layout>

</x-guest-layout>
