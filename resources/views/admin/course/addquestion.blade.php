@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">


    
  
             
  
<div class="col-md-12">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافه سوال الى الاختبار</h3>
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
             <form method="get"  class="form-horizontal" action="{{ route('adminstoretest') }}" class="add-form">
                        @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">اكتب سؤالك هنا</label>

                  <div class="col-sm-10">
                  <textarea name="question"   class="form-control"placeholder="اكتب سؤالك هنا"></textarea>

                  </div>
                </div>
                        <h4>يجب عليك اختيار اجابة صحيحة واحده</h4>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">اكتب الاجابة الاولي</label>

                  <div class="col-sm-10">
                        <input type="radio" name="correct_answer" value="n1">
                       <input  name="n1" class="form-control" type="text" placeholder="اكتب الاجابة الاولي">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">اكتب الاجابة الثانيه</label>

                  <div class="col-sm-10">
                        <input type="radio" name="correct_answer" value="n3">
                       <input  name="n2" class="form-control" type="text" placeholder="اكتب الاجابة ">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">اكتب الاجابة الثالثه</label>

                  <div class="col-sm-10">
                        <input type="radio" name="correct_answer" value="n3">
                       <input  name="n3" class="form-control" type="text" placeholder="اكتب الاجابه ">
                  </div>
                </div>
                 <input name="course_id"value="{{$course_id}}" type="hidden">

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-left">اضافه الى الاختبار</button>
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
