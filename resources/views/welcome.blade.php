@extends('layouts.front')

@section('content')




                <div class="allcourses-box">
                    <div class="allcourses-head text-center">
                        <div class="container">
                            <h1>جميع الكورسات</h1>
                            <div class="nav-left nav-mobile col-md-4 col-xs-12 pull-left">
                                <div class="user-logged">
                                    <ul>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal"><i class="fa fa-user"></i>
                                    <b>امير ناجح</b>
                                    
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <div class="drop drop-links col-xs-12">
                                                    <div class="drop-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-user"></i>&nbsp; عرض الحساب
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-cog"></i>&nbsp; تعديل الحساب
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-power-off"></i>&nbsp; خروج
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end drop-links -->
                                                </div>
                                                <!-- end drop -->
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /.user-controls -->


                            </div>
                            <!-- /.nav-user -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.allcourses-head -->
                    <div class="search-categories text-center">
                        <div class="container">
                            <div class="cat-item">
                             
                                <!-- /. cat-inner -->
                                <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-right">
                                  
                                    <form action="{{ route('search') }}" method="GET">
                                    @csrf
                                        <input type="search" name="search" placeholder="ابحث عن كورسات أخري" required/>
                                        <button type="submit"><i class="fa fa-search"></i>Search</button>
                                    </form>
                                </div>
                                <!-- /. cat-inner -->
                            </div>
                            <!-- /.cat-item -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.search-categories -->
                    <div class="allcourses-body">
                        <div class="container">
                            <div class="row">
                                <div class="row block-container">
 @foreach ($allcourses as $course)
                            <div class="block col-md-4 col-sm-6">
                                <figure>
                                    <div><img src="{{asset('images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                                    <figcaption class="text-right">
                                        <h1> :اسم الكورس<span>  {{$course->title}}  </span></h1>
                                        <h1> :اسم المدرس<span>  {{$course->lecturer->name}}  </span></h1>
                                        <h1> :عدد الطلبة المشتركة<span>  {{count($course->orders)}}  </span> </h1>
                                        <h1> :تاريخ بداية الكورس<span>  {{$course->start_at}}  </span></h1>
                                        <h1> :تقييم الكورس <span>30%</span></h1>
                                        <a href="{{ route('course_intro', $course->id) }}">
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