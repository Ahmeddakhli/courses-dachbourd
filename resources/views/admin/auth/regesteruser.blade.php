@extends('layouts.admin')

@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">add new user</h3>
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
                  <form  method="POST" class="form-horizontal" action="{{ route('admin.user.register') }}">
                                    @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">الإسم بالكامل</label>

                  <div class="col-sm-10">

                   <input name="name" type="text"   class="form-control" placeholder="الإسم بالكامل">

         @if ($errors->has('name'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('name') }}.</strong>
                </span>
        @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">إسم المستخدم</label>

                  <div class="col-sm-10">
      <input  name="username" class="form-control" type="text" placeholder="إسم المستخدم">

            <span class="glyphicon glyphicon-user form-control-feedback"></span>
              @if ($errors->has('username'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('username') }}.</strong>
                </span>
        @endif                  </div>
                </div>


                      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">رقم الهاتف</label>

                  <div class="col-sm-10">
   <input type="text" name="phone"  class="form-control"placeholder="رقم الهاتف">
               @if ($errors->has('phone'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('phone') }}.</strong>
                </span>
        @endif
                  </div>
                </div>
                
                      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">البريد الإلكتروني</label>

                  <div class="col-sm-10">
            <input  name="email"type="email" class="form-control" placeholder="البريد الإلكتروني">

            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                     @if ($errors->has('email'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('email') }}.</strong>
                </span>
        @endif
                  </div>
                </div>
                             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">كلمه المرور</label>

                  <div class="col-sm-10">
              <input type="password"  name="password"class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          @if ($errors->has('password'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('password') }}.</strong>
                </span>
        @endif
                  </div>
                </div>
                                     <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> تاكيد كلمه المرور </label>

                  <div class="col-sm-10">
         <input type="password"  name="password_confirmation"class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            
             @if ($errors->has('password_confirmation'))
                <span class="invalid feedback"role="alert"  style="color: red;">
                    <strong>{{ $errors->first('password_confirmation') }}.</strong>
                </span>
        @endif
                  </div>
                </div>
                                        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> اختر الدوله </label>

                  <div class="col-sm-10">
               <select class="form-control" name="status">
                <option value="sa">السعوديه</option>
                <option value="eg">مصر</option>
            </select>
                  </div>
                </div>
           <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> اختر الجنس </label>

                  <div class="col-sm-10">
             <select class="form-control" name="sex">
              <option value="male">ذكر</option>
              <option value="femail">انثى</option>
          </select>
                  </div>
                </div>
        
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-center">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
     
        </div>

  
        
         

   

@endsection