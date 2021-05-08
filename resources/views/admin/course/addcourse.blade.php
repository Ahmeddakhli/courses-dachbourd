@extends('layouts.admin')

@section('content')
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
<div class="box box-success">
            <div class="box-header with-border">
              <h1 class="box-title">admin add course</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                   <form method="post"   role="form" action="{{ route('admin.add.course') }}" class="add-form">
                        @csrf
              <div class="box-body" style="    text-align: right;">
                   <div class="col-md-6">

               <div class="form-group">
                                 <label for="exampleInputEmail1">عنوان الدوره</label>

                                <input name="title"   class="form-control" type="text" placeholder="اضف عنوان الدورة">
                                          @if ($errors->has('title'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('title') }}.</strong>
                </span>
        @endif
                            </div>
                            <!-- /.form-group -->
                          
                            <div class="form-group">
                        <div class='card'>
                         <label for="exampleInputEmail1">المجالات</label>

                        <div class='card-body'>
                                    @php
                                
                                   $tags= App\Models\Tag::all();
                                 @endphp
                                          @foreach ($tags as $tag )
                                   
                                                <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                                                    <label>
                                                        <input  type="checkbox" value="{{$tag->id}}" name="tags[]">
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
                               </div>
                             </div> 
                             <br>
                                           <div class="form-group">
                  <label for="exampleInputEmail1">تاريخ بدايه الدوره</label>
                            <input class="form-control" type="date" id="birthday" name="start_at">
                            </div>
                                      <div class="form-group">
                  <label for="exampleInputEmail1">تاريخ نهاية  الدوره</label>
                            <input class="form-control" type="date" id="birthday" name="end_at">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                  <label for="exampleInputEmail1">الجنس المتوقع </label>
                                <div class="add_cont text-right">
                                    <label class="text-right">
                                        <input name="sex" value="male" type="radio">
                                        <span>ذكور</span>
                                    </label>
                                    <label class="text-right">
                                        <input  name="sex" value="female"  type="radio">
                                        <span>إناث</span>
                                    </label>
                                </div>
                            </div>

                             </div>
                            
                  <div class="col-md-6">
                            <!-- /.form-group -->
                            <div class="form-group">
                         <label for="exampleInputEmail1"> رابط فيديو</label>
                                <div class="add_cont text-right">
                                    <div class="lecture-item">
                                        <div class="add_cont text-right">
          
                                            <!--
                                                                                <label class="text-right">
                                                                                    <input class="form-control" type="radio" id="add-link">
                                                                                    <span>يوتيوب</span>
                                                                                </label>
-->
                                        </div>

                                    </div>
                                    <!-- /.lecture-item -->
                                </div>
                                
                                <input  name="vedio_link" class="form-control" type="text" placeholder="ادخل رابط فيديو" class="linked">
          @if ($errors->has('vedio_link'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('vedio_link') }}.</strong>
                </span>
        @endif
                            </div>
                            <!-- /.form-group -->
                

                            <div class="form-group">
                  <label>اختر اسم المحاضر</label>
                  <select class="form-control" name="lecturer_id">
                  @php
                  use App\Models\Lecturer;
                    $lecturers= Lecturer::all();
                  @endphp
                  <option  selected > اختر اسم المحاضر</option>

                  @foreach ( $lecturers as $lecturer)
                   <option  value="{{$lecturer->id}}" selected >{{$lecturer->name}} </option>

                  @endforeach
   
                  </select>
                </div>
                        <div class="form-group">
                  <label for="exampleInputEmail1">نوع الدوره</label>
                                <div class="add_cont text-right">
                                    
                                        <div class="add_cont text-center">
                                            <label class="text-right">
                                                <input name="course_payment" type="radio" value="payed" id="up-video2">
                                                <span>مدفوعه</span>
                                                 <input name="course_payment" type="radio"  value="nonpayed"id="up-video">
                                                <span>مجانى</span>
                                            </label>

                                            <div class="videoUploaded2 col-xs-12 text-right">
                                              <input  name="course_mony"  class="form-control linked"  type="number" data-toggle="tooltip" data-placement="top" placeholder="اضف سعر الدورة" title="اضف سعر الدورة">

                                            </div>
                                            <!--
                                                                                <label class="text-right">
                                                                                    <input class="form-control" type="radio" id="add-link2">
                                                                                    <span>يوتيوب</span>
                                                                                </label> -->

                                        </div>

                                    
                                    <!-- /.lecture-item -->
                                </div>

                            </div>

                            <br>
                            <br>
                           


                                 <div class="form-group">
                                       <label for="exampleInputEmail1"> الملحقات  </label>
                                <div class="add_cont text-right">
                                                <input name="img" class="form-control-file" type="file" >
                                        <span class="hint"> Image  Pdf الملفات يمكن ان تكون </span>                   

                                                        </div>

                                                            @if ($errors->has('img'))
                                        <span class="invalid feedback"role="alert"  style="color: red;">
                                            <strong>{{ $errors->first('img') }}.</strong>
                                        </span>
                                @endif
                            </div>

              <div class="form-group">

          
          </div>
                               <br>
              </div>

                  
                    <br>
                     
                                        <div class="form-group">
                                    
                  <label for="exampleInputEmail1">اضف وصف الدورة</label>
                                <textarea class="form-control"  name="description" placeholder="اضف وصف الدورة"></textarea>
                            </div>
                            <!-- /.form-group -->
                              <div class="form-group">
                              
                           <label for="exampleInputEmail1">الرسالة الترحيبه الدورة</label>
 
                                <textarea  name="wellcome_massage"  class="form-control"placeholder="رساله ترحيب موجه للطلاب"></textarea>
                            </div>
 </div>
        

              <div class="box-footer">
                <button  type="submit" class="btn btn-primary">اضافه دوره</button>
              </div>
            
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
@endsection