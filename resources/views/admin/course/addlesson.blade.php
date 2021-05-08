@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">


    
  
             
  
<div class="col-md-12">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافه درس جديدالى الكورس</h3>
            </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <!-- /.box-header -->
            <!-- form start -->
             <form method="post"  enctype="multipart/form-data" class="form-horizontal" action="{{ route('adminaddlesson',$course_id) }}" class="add-form">
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">عنوان الدرس</label>

                  <div class="col-sm-8">
                   <input   name="title" class="form-control"   type="text" placeholder="اضف اسم المحاضرة">

                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">رابط فيديو</label>

                  <div class="col-sm-8">
                         <input name="vedio_link"  class="form-control"   type="text" placeholder="ادخل رابط فيديو" class="linked">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">اضف وصف المحاضرة</label>

                  <div class="col-sm-8">
                      <textarea name="description"class="form-control"   placeholder="اضف وصف المحاضرة"></textarea>

                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">الملحقات</label>

                  <div class="col-sm-8">
                    <input name="document_link" class="form-control-file" type="file" >

                   <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>


                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ترتيب الدرس</label>

                  <div class="col-sm-8">
                    <input class="form-control"   type="number"  name="order" data-toggle="tooltip" data-placement="top" title="" class="add_sort-number" data-original-title="اكتب ترتيب الدرس بالأرقام">


                  </div>
                </div>
          
                 <input name="course_id"value="{{$course_id}}"   type="hidden">

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button   type="submit" class="btn btn-info pull-left">اضافه الى الاختبار</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

          <!-- /.box -->
        </div>
             </div><!-- /.box -->
            </div><
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>


@endsection
