@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">


    
  
             
  
<div class="col-md-12">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافه وتعديل روابط الموقع</h3>
            </div>



            <!-- /.box-header -->
            <!-- form start -->
           @php
           use App\Models\Setting;

               $link= Setting::all()->where('page',"link");
           @endphp
              <div class="box-body">
                     @foreach ($link as $setting)
      
             
                <form method="POST" action="{{route('updatesetting',$setting->id)}}">
                 @csrf

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">{{$setting->name}} {!!$setting->value_en!!}
</label>

                  <div class="col-sm-8">
                         <input name="value_ar"  class="form-control"   type="url" value=" {{$setting->value_ar }}" class="linked">
                  <label>اخترالايكونه</label>
                  <select class="form-control" name="value_en">
              

                  
                   <option  value='<i class="fa fa-fw fa-facebook-square"></i>' selected >  facebook </option>
                   <option  value='<i class="fa fa-fw fa-youtube-square"></i>'  >youtube </option>
                   <option  value='<i class="fa fa-fw  fa-google"></i>' > google</option>
                   <option  value='<i class="fa fa-fw  fa-whatsapp"></i>' >whatsapp</option>

             
   
                  </select>
                  </div>
                </div>
                     <div class="box-footer">

                <button   type="submit" class="btn btn-info pull-left">حفظ التغيرات</button>
                          <a href="{{ route('delete.setting',$setting->id) }}">         
    <button type="button" class="btn btn-danger"onclick="return confirm('Are you sure?you want to delete this فكر تانى ')" >delete</button>
</a>
              </div>
              <!-- /.box-footer -->
              
            </form>
          
 
          
        @endforeach
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                                  <div class="form-group">
                  <label>اخترالايكونه</label>
              <select class="form-control" name="value_en">
              

                  
                   <option  value='<i class="fa fa-fw fa-facebook-square"></i>' selected >  facebook </option>
                   <option  value='<i class="fa fa-fw fa-youtube-square"></i>'  >youtube </option>
                   <option  value='<i class="fa fa-fw  fa-google"></i>' > google</option>
                   <option  value='<i class="fa fa-fw  fa-whatsapp"></i>' >whatsapp</option>

             
   
                  </select>
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
          </div>

          <!-- /.box -->
        </div>
             </div><!-- /.box -->
            </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>


@endsection
