@extends('layouts.lecturer')

@section('content')

        <div class="up-container">
            <div class="up-header text-center">
                <div class="container">
                    <h1>إضافة دورة جديدة</h1>
                </div>
                <!-- /.container -->
            </div>

            <!-- /.up-header -->
            <div class="up-box">
                <div class="container">
                    <div class="up-form">

                        <form method="get" action="{{ route('storecourse') }}" class="add-form">
                        @csrf
                            <div class="up_form-item">
                                <h1>عنوان الدورة</h1>
                                <input name="title"  type="text" placeholder="اضف عنوان الدورة">
                                          @if ($errors->has('title'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('title') }}.</strong>
                </span>
        @endif
                            </div>
                            <!-- /.up_form-item -->

                               
                            <div class="up_form-item">
                                    @php
                                
                                   $tags= App\Models\Tag::all();
                                 @endphp
                                <h1>المجالات</h1>
                                          @foreach ($tags as $tag )
                                   
                                                <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                                                    <label>
                                                        <input type="checkbox" value="{{$tag->id}}" name="tags[]">
                                                        <span>{{ $tag->title}}</span>
                                                    </label>
                                                </div>
                                                  @if ($errors->has('tags'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('tags') }}.</strong>
                </span>
        @endif
                                                <!-- /.interest-item -->

                                      @endforeach
                             
                            </div>
                            
                            <!-- /.up_form-item -->
                            <div class="up_form-item">
                                <h1>رابط فيديو</h1>
                                <div class="add_cont text-right">
                                    <div class="lecture-item">
                                        <div class="add_cont text-right">
          
                                            <!--
                                                                                <label class="text-right">
                                                                                    <input type="radio" id="add-link">
                                                                                    <span>يوتيوب</span>
                                                                                </label>
-->
                                        </div>

                                    </div>
                                    <!-- /.lecture-item -->
                                </div>
                                <input  name="vedio_link" type="text" placeholder="ادخل رابط فيديو" class="linked">
          @if ($errors->has('vedio_link'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('vedio_link') }}.</strong>
                </span>
        @endif
                            </div>
                            <!-- /.up_form-item -->
                            <div class="up_form-item">
                                <h1>وصف الدورة</h1>
                                <textarea  name="description" placeholder="اضف وصف الدورة"></textarea>
                            </div>
                                <div class="up_form-item">
                                <h1>تاريخ بدا الدورة</h1>
                            <input type="date" id="birthday" name="start_at">
                            </div>
                            <!-- /.up_form-item -->
                            <div class="up_form-item">
                                <h1>الجنس المتوقع</h1>
                                <div class="add_cont text-right">
                                    <label class="text-right" value="male">
                                        <input name="sex" type="checkbox">
                                        <span>ذكور</span>
                                    </label>
                                    <label class="text-right">
                                        <input  name="sex" value="female" type="checkbox">
                                        <span>إناث</span>
                                    </label>
                                </div>
                            </div>

                 
                             <div class="up_form-item">
                                <h1>نوع الدوره</h1>
                                <div class="add_cont text-right">
                                    <div class="lecture-item">
                                        <div class="add_cont text-right">
                                            <label class="text-right">
                                                <input name="course_payment" type="checkbox" value="payed" id="up-video2">
                                                <span>مدفوعه</span>
                                                 <input name="course_mony" type="checkbox"  value="nonpayed"id="up-video">
                                                <span>مجانى</span>
                                            </label>

                                            <div class="videoUploaded2 col-xs-12 text-right">
                                              <input  name="course_mony" class="linked" type="number" data-toggle="tooltip" data-placement="top" placeholder="اضف سعر الدورة" title="اضف سعر الدورة">
                                              <input  name="lecturer_id"  type="hidden"   value="{{auth()->guard('lecturer')->user()->id}}">

                                            </div>
                                            <!--
                                                                                <label class="text-right">
                                                                                    <input type="radio" id="add-link2">
                                                                                    <span>يوتيوب</span>
                                                                                </label> -->

                                        </div>

                                    </div>
                                    <!-- /.lecture-item -->
                                </div>

                            </div>
                            <!-- /.up_form-item -->
                              <div class="up_form-item">
                                <h1>الرسالة الترحيبه الدورة</h1>
                                <textarea  name="wellcome_massage" placeholder="رساله ترحيب موجه للطلاب"></textarea>
                            </div>

                            <div class="up_form-item">
                                <a class="add-cert">اضافة شهادة للدورة</a>
                                <div class="course-cert">
                                    <div class="up_form-item">
                                        <h1>إسم الشهادة</h1>
                                        <input type="text" placeholder="اضف اسم الشهادة">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <h1>الجهة المانحة</h1>
                                        <input type="text" placeholder="اضف الجهة المانحة">
                                    </div>
                                    <!-- /.up_form-item -->
                                    <div class="up_form-item">
                                        <h1>تكلفة الشهادة</h1>
                                        <div class="add_cont text-right">
                                            <label class="text-right">
                                                <input type="radio" name="f">
                                                <span>مجاني</span>
                                            </label>
                                            <label class="text-right">
                                                <input type="radio" name="f">
                                                <span>مدفوع</span>
                                            </label>
                                            <input type="number" data-toggle="tooltip" data-placement="top" title="اضف سعر الشهادة" </div>
                                        </div>
                                        <!-- /.up_form-item -->
                                    </div>
                                    <!-- /.course-cert -->
                                </div>
                                <!-- /.up_form-item -->

                                <div class="up_form-item up-confirm">
                                    <input type="submit" value="اضافة الدورة">
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
        <!-- /.wrapper -->

        <div class="toTop col-xs-12 text-center">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- /.toTop -->

@endsection