@extends('layouts.admin')

@section('content')
   <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">
                  <h2 class="mb-4">all tags
</h2>
                      @foreach ($tags as $tag )
                      
                       
                                         <div class="col-md-3">
          <div class="info-box">
          
            <span class="info-box-icon bg-red"> <a href="{{route('deltag',$tag->id) }}"> <i class="fa fa-times" ></i> </a></span>

            <div class="info-box-content">
              <span class="info-box-text"><h3>{{ $tag->title}}</h3></span>
              <span class="info-box-number">{{count( $tag->users )+count( $tag->lecturers)}} عدد المستخدمين</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
                      @endforeach

 <div class="col-md-12">
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
               </div><!-- /.box -->
            </div><!-- /.col -->
          </div>

@endsection
