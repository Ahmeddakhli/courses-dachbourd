@extends('layouts.admin')

@section('content')
 @foreach ($tags as $tag )
   <div class="col-md-4">
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">{{$tag->title}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
 @endforeach

 <div class="col-md-9">
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">add tags</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form method="get" action="{{ route('storetag') }}" class=" form-horizontal add-form">
                        @csrf
         
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">tag title </label>

                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder=" ادخل اسم المجال">
                  </div>
                </div>
             
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">add</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
        </div>
@endsection
