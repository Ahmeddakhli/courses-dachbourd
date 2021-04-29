@extends('layouts.admin')

@section('content')
 

  

       
              

 <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"> {{ $user->name}}</h3>

              <p class="text-muted text-center">Software Engineer</p>
      <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Tags</strong>

              <p>
              @foreach ( $user->tags as $tag )
                <span class="label label-success">{{$tag->title}}</span>
              @endforeach
         
              </p>

              <hr>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>{{ $user->phone}}</b> <a class="pull-right">primary</a>
                </li>
                <li class="list-group-item">
                  <b>{{ $user->email}}</b> <a class="pull-right">primary</a>
                </li>
               <li class="list-group-item">
                  <b> الارباح الخاصه بهذا المحاضر</b> <a class="pull-right">
                  @php
                    $allmony=0;
                  @endphp
                    @foreach ( $user->courses as $course )
            @php
              $allmony= $allmony + $course->course_mony;
            @endphp
          
             
              @endforeach
                   {{ $allmony}} 
                  </a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

   
          <!-- /.box -->
        </div>
        <div class="col-md-9
        ">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a href="#activity" data-toggle="tab" aria-expanded="false">Activity</a></li>
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">Timeline</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane " id="activity">
                <!-- Post -->
               


                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <h1>الكورسات المشترك بها</h1>
                        </span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                  
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
   
                        <!-- /.col -->
                              @foreach ( $user->courses as $course )
               <div class="col-sm-3">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                   <span class="label label-success">   {{$course->title}} </span>
                        </div>
              @endforeach
         
                       
                      
                    
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

             

                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                 @foreach ( $user->courses as $course )
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                 
                              {{$course->title}}                
                            </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                @foreach ( $course->massages as $massage )

                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">  sent  by{{$massage->lecturer->name}}</a> <address>"{{$massage->title}}"</address></h3>

                      <div class="timeline-body">
                    {{$massage->body}}
                      </div>
                     
                    </div>
                  </li>
                  <!-- END timeline item -->
                    @endforeach
   @endforeach
                </ul>
              </div>
              <!-- /.tab-pane -->

  
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
 
@endsection
