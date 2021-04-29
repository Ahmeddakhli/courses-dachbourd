@extends('layouts.front')

@section('content')




                <div class="allcourses-box">
                    <div class="allcourses-head text-center">
                        <div class="container">
                            <h1>جميع الكورسات</h1>
                            <div class="nav-left nav-mobile col-md-4 col-xs-12 pull-left">
                            
                            <!-- /.nav-user -->
                        </div>
                        <!-- /.container -->
                    </div>
                    
                    <!-- /.search-categories -->
                    <div class="allcourses-body">
                        <div class="container">
                            <div class="row">
                                <div class="row block-container">
           @foreach ($allorders as $order)
                            <div class="block col-md-4 col-sm-6">
                                <figure>
                                    <div><img src="{{asset('images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                                    <figcaption class="text-right">
                                        <h1> :اسم الكورس<span>  {{$order->course->title}}  </span></h1>
                                        <h1> :اسم المدرس<span>  {{$order->course->lecturer->name}}  </span></h1>
                                        <h1> :عدد الطلبة المشتركة<span>  {{count($order->course->orders)}}  </span> </h1>
                                        <h1> :تاريخ بداية الكورس<span>  {{$order->course->start_at}}  </span></h1>
                                        <h1> :تقييم الكورس <span>30%</span></h1>
                                        <a href="{{ route('course_intro', $order->course_id) }}">
                                            <i class="fa fa-eye"></i> مشاهدة الكورس
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
              @endforeach


                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->

                            <div class="inner col-xs-12 text-center">


                                <ul class="pagination">

                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end inner -->

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.allcourses-body -->
                </div>
                <!-- /.allcourses-box -->
@endsection
<x-guest-layout>

</x-guest-layout>