@extends('layouts.front')

@section('content')


        <div class="up-container">
            <div class="up-header text-center">
                <div class="container">
                    <h1>إضافة محاضرة جديدة</h1>
                </div>
                <!-- /.container -->
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        </ul>
    </div>
@endif
            <!-- /.up-header -->
            <div class="up-box">
                <div class="container">
                    <div class="up-form">

                        <div class="add_lecture in-one">
                               <form method="POST" action="{{ route('addlesson',$id) }}" class="add-form">
                        @csrf
                           <input   name="course_id" type="hidden" value="{{$id}}">
                                <div class="lecture-item">
                                    <h1>اسم الدرس</h1>
                                    <input   name="title" type="text" placeholder="اضف اسم المحاضرة">
                                </div>
                                <!-- /.lecture-item -->
                                <div class="lecture-item">
                                    <h1>اضف رابط خارجي للفيديو</h1>
                                    <div class="add_cont text-right">
                                   
                                        <!--
                                                                                <label class="text-right">
                                                                                    <input type="radio" id="add-link">
                                                                                    <span>يوتيوب</span>
                                                                                </label>
-->
                                    </div>
                                    <input name="vedio_link"  type="text" placeholder="ادخل رابط فيديو" class="linked">
                                </div>
                                <!-- /.lecture-item -->
                                <div class="lecture-item">
                                    <h1>وصف الدرس</h1>
                                    <textarea name="description"  placeholder="اضف وصف المحاضرة"></textarea>
                                </div>
                                <!-- /.lecture-item -->
                                <div class="lecture-item text-right">
                                    <div class="fileUpload col-xs-12 text-right">
                                        <span><i class="fa fa-file"></i> رابط أوراق العمل </span>
                                        <input name="document_link"type="file" class="upload">
                                    </div>
                                    <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>
                                </div>
                                  <div class="lecture-item  text-right">
                               
                               <input type="number"  name="order" data-toggle="tooltip" data-placement="top" title="" class="add_sort-number" data-original-title="اكتب ترتيب الدرس بالأرقام">
                                                                       <span>يجب تحديد ترتيب الدرس  </span>

                                </div>
   
                                <!-- /.lecture-item -->
                                <div class="lecture-item confirm-lec">
                                    <input type="submit" value="إضافة محاضرة">
                                </div>
                                <!-- /.lecture-item -->

                            </form>
                        </div>
                        <!-- /.add_lecture -->
                    </div>
                    <!-- /.up-form -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.up-box -->
        </div>
        <!-- /.up-container -->

       
   

        <div class="toTop col-xs-12 text-center">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- /.toTop -->



@endsection