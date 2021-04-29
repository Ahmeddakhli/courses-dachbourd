@extends('layouts.admin')

@section('content')
 

  

       
              

 <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"> {{ $course->title}}</h3>

              <p class="text-muted text-center">{{ $course->description}}</p>
      <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Tags</strong>

              <p>
              @foreach ( $course->tags as $tag )
                <span class="label label-success">{{$tag->title}}</span>
              @endforeach
         
              </p>

              <hr>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>المحاضر</b> <a class="pull-right">{{ $course->lecturer->name}}</a>
                </li>
                <li class="list-group-item">
                  <b>عدد المشتركين فى الدوره</b> <a class="pull-right">{{ count($course->orders)}}</a>
                </li>
                <li class="list-group-item">
                  <b>start_at</b> <a class="pull-right">{{ $course->start_at}}</a>
                </li>
               <li class="list-group-item">
                  <b> الارباح الخاصه بهذا الدوره</b> <a class="pull-right">
            {{ count($course->orders)*$course->course_mony}}
                  
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
                          <h1>المستخدمين المشتركين بالدوره</h1>
                        </span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                  
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
   
                        <!-- /.col -->
                              @foreach ( $course->orders as $order )
               <div class="col-sm-3">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                   <span class="label label-success">   {{$order->user->name}} </span>
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
                 @foreach ( $course->massages as $massage )
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                 
                              {{$massage->created_at}}                
                            </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
              

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
