@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
 <div class="col-sm-12"><h1 class="mb-2"> page of our services</h1></div>


 <div class="col-md-3">
              <div class="box box-info box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">add new setting to our services</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: none;">
                              
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
   <div class="card card-primary">
           
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('addtoservices')}}">
                 @csrf
         
          <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name of setting</label>
                  
                      <textarea class="form-control" rows="2" name="name" ></textarea>  
                   <input  type="hidden"  name="page"  value="services">  

                  </div>
                </div>
                 <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">sub title of setting</label>
                  
                      <textarea class="form-control" rows="2" name="sub" ></textarea>  

                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عربي</label>
              <textarea class="form-control" rows="5" cols="40" name="value_ar" ></textarea>   
                </div>
                
                       
                  <div class="form-group">
                    <label for="exampleInputPassword1">انجليزى</label>
                    <textarea class="ckeditor form-control" rows="5" name="value_en"></textarea>

                  </div>
                  
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
 @foreach ($data as $setting)
 <div class="col-md-3">
              <div class="box box-default box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">{{$setting->name}}</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: none;">
                              
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
   <div class="card card-primary">
           
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('updatesetting',$setting->id)}}">
                 @csrf
          
          <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">subtitel</label>
                  
                      <textarea class="form-control" rows="2" name="sub" >{{$setting->sub}}</textarea>  
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عربي</label>
              <textarea class="form-control" rows="5" cols="40" name="text" >{{$setting->value_ar}}</textarea>   
                </div>
                
                       
                  <div class="form-group">
                    <label for="exampleInputPassword1">انجليزى</label>
                    <textarea class="ckeditor form-control" rows="5" name="text1">{{$setting->value_en}}</textarea>

                  </div>
                  
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
                       
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

        @endforeach
           <div class="col-sm-12"><h1 class="mb-2"> social links</h1></div>

      <div class="col-md-3">
              <div class="box box-info box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">add new link</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: none;">

                    <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('addtolinks')}}">
                 @csrf
          
             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name of link</label>
                   <input class="form-control"  name="name">
                   <input  type="hidden"  name="page"  value="link">  
                   <input  type="hidden"  name="sub"  value=" _.">  

                  </div>
                      <div class="form-group">
                    <label for="exampleInputEmail1">link</label>
                   <input class="form-control"  name="value_ar">

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
       @foreach ($link as $setting)
       <div class="col-md-3">
              <div class="box box-default box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">{{$setting->name}}</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="display: none;">

                    <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('updatesetting',$setting->id)}}">
                 @csrf
        
             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">{{$setting->name}}</label>
                   <textarea class="ckeditor form-control"  name="text">{{$setting->value_ar}}</textarea>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
     
 
                    @endforeach
           
         
            </div>
           </div>
            </div>
          </div>
        </div>
@endsection
