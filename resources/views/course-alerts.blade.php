@extends('layouts.front')

@section('content')



        <div class="intro-container col-xs-12">
            <div class="intro-head text-center">
                <div class="container">
                    <h1>كورس البرمجة بلغة الجافا</h1>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.intro-head -->

            <div class="corse-box col-xs-12">
                <div class="corse-nav text-center">
                    <div class="container">
                        <ul>
                            <li>
                                <a href="{{ route('course_page', $course->id) }}">
                                    <i class="fa fa-tasks"></i> الدروس
                                </a>
                            </li>

                    

                            <li>
                                <a href="{{ route('alart', $course->id) }}" class="active">
                                    
                                    <i class="fa fa-bell"></i> التنويهات
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end corse-nav -->
                <div class="lesson-box text-right">
                    <div class="container">
                        <div class="alert-box">
                        @if (count( $massages)>0)
                                   <div class="all-alerts col-xs-12 text-right">
                                <ul>
                                @foreach (  $massages as  $massage)
                                        <li>
                                        <h1> {{$massage->title}}</h1>
                                        <span>{{$massage->created_at}}</span>
                                        <p>{{$massage->body}}</p>
                                    </li>
                                @endforeach

                                </ul>
                            </div>
                            <!-- end all-alerts -->
                        @else
                          
                            <div class="empty-msg text-center animated shake">
                                       <h1>
                                    <i class="fa fa-bell-slash"></i>
                                    لا توجد تعليقات حتي الان
                                </h1>
                               </div>

                            <!-- end empty-msg -->
                        @endif
                     
                      
                        </div>
                        <!-- end alert-box -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end lesson-box -->
            </div>
            <!-- end corse-box -->

        </div>
        <!-- /.intro-container -->

        <footer>
            <div class="container">
                <div class="copyrights col-md-10 col-xs-12 text-center pull-right">
                    <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
                </div>
                <!-- /.copyrights -->
                <div class="footer-links col-md-2 col-xs-12 pull-left">
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-links -->
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- /.wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->

@endsection
<x-guest-layout>

</x-guest-layout>