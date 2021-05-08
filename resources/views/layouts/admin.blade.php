
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
        {{-- ChartScript --}}
      @include('sweetalert::alert')
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css
')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css
">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css
">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css')}}">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

 

    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ route('courses') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>courses</b>project</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="hieght: 100%;">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="hieght: 100%;">

         
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" style="hieght: 100%;">
           
            <!-- Optionally, you can add icons to the links -->
            
           
            <li class="active"><a href="{{ url('/admin') }}"><i class="fa fa-link"></i> <span>home</span></a></li>
  <li class="treeview" style="height: auto;">
          <a href="#">

           @php
             use App\Models\Adminnotifcation;
              $newuser=  Adminnotifcation::where('isseen', '=', 0)->get();
           @endphp
           <h4> <span class="pull-left-container">
              <small class="label pull-left bg-red">{{count($newuser)}}</small>
            </span> 

             <i class="fa fa-users"></i> <span>     users </span></h4>
         
          </a>
          <ul class="treeview-menu" style="display: none;">
          <li><a href="{{ route('clientuser') }}"><i class="fa fa-circle-o"></i>  show users</a></li>
               <li><a href="{{ route('registuser') }}"><i class="fa fa-circle-o"></i> add user</a></li>
          </ul>
        </li>
        
         <li class="treeview" style="height: auto;">
          <a href="#">
           
           <h4><i class="fa fa-pie-chart"></i><span >   courses     </span></h4>
                <i class="fa fa-angle-left pull-right"></i>
         
          </a>
          <ul class="treeview-menu" style="display: none;">
<li><a href="{{ route('courses2') }}"><i class="fa fa-circle-o"></i> show courses</a></li>
               <li><a href="{{ route('admincourse') }}"><i class="fa fa-circle-o"></i> add course</a></li>
          </ul>
        </li>
          
             
         <li class="treeview" style="height: auto;">
          <a href="#">
           
           <h4><i class="fa fa-user"></i><span >   lecturers    </span></h4>
         
          </a>
          <ul class="treeview-menu" style="display: none;">
              <li><a href="{{ route('addminlecturer') }}"><i class="fa fa-circle-o"></i>All lecturers</a></li>
               <li><a href="{{ route('registlectuer') }}"><i class="fa fa-circle-o"></i> add lecturer</a></li>
          </ul>
        </li>
           <li class="treeview" style="height: auto;">
          <a href="#">
           
           <h4><i class="fa fa-user"></i><span >   All tags    </span></h4>
         
          </a>
          <ul class="treeview-menu" style="display: none;">
                <li><a href="{{ route('tags') }}"><i class="fa fa-circle-o"></i> add tag</a></li>
          </ul>
        </li>
           
      
               <li><a href="{{ route('order2') }}"><i class="fa fa-link"></i> <span>All orders</span></a></li>

                  <li><a href="{{ route('admin.show.certification') }}"><i class="fa fa-link"></i> <span>All certification
</span></a></li>

                  <li><a href="{{ route('Financial') }}"><i class="fa fa-link"></i> <span>All Financial</span></a></li>
                  <li><a href="{{ route('settingtable') }}"><i class="fa fa-link"></i> <span>All settings</span></a></li>
       
            <li><a href="{{ route('courses') }}"><i class="fa fa-link"></i> <span>go to website</span></a></li>
        
       <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                

                <div class="ml-3">
                    <div style="color:blue" class="font-medium text-base text-gray-800">{{ auth()->guard('admin')->user()->name }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="get" action="{{ route('adminLogout') }}">
                    @csrf

                    <x-responsive-nav-link :href=" route('adminLogout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                   <ul>  <li><h3><i class="fa fa-link">log out</i> </h3></li></ul>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
        
<div class="card text-center">
  
  <div class="card-body">
  
  @toastr_js
  <div class="content" style="min-height: 921px;">
              @yield('content')
              </div>
              @toastr_css
              @toastr_js

  </div>
  
</div>


        
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer" style="hieght:200px;">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    


    <!-- jQuery 2.1.4 -->


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js
"></script>
<!-- Bootstrap 3.3.4 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>
     @stack('jss');

 @yield('js');
 
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
