@extends('layouts.front')

@section('content')




                <div class="allcourses-box">
                    <div class="allcourses-head text-center">
                        <div class="container">
                            <h1>جميع  المجالات</h1>
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
       
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-diamond"></i>
                                        الاهتمامات
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="interest-show">
                                            <ul>
                                        
                                                @foreach (Auth::user()->tags as $tag )
                                             
                                                <li>
                                                    <span class="inter-item">{{ $tag->title}}
                                                     <a href="{{route('deltag',$tag->id) }}"> <i class="fa fa-times" id="del-item"></i> </a>
                                                    </span>
                                                </li>
                                                   @endforeach
                                          
                                            </ul>
                                        </div>
                                        <!-- /.interest-show -->
                                        <div class="add-interest">
                                            <a>
                                                <i class="fa fa-plus"></i> أضف اهتمامات أخري
                                            </a>
                                        </div>
                                        <!-- /.add-interest -->
                                        <div class="home_data-item col-md-12  col-xs-12 pull-right">

                                            <div class="interest-cont col-xs-12">
                                            @php
                                
                                                $tags= App\Models\Tag::all();
                                            @endphp
                                               <form method="get" action="{{ route('addusertag') }}">
            @csrf
                                    @foreach ($tags as $tag )
                                        
                                 
                                                
                                        
                                                <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                                                    <label>
                                                        <input type="checkbox" value="{{$tag->id}}" name="tags[]">
                                                        <span>{{ $tag->title}}</span>
                                                    </label>
                                                </div>
                                        
                                                <!-- /.interest-item -->

                                      @endforeach
                    <input  name="id"  type="hidden"   value="{{auth()->user()->id}}">

                                                                 <x-button class="ml-3">
                حقظ الاهتمامات
                </x-button>

        </form>
                                            </div>
                                            <!-- /.interest-cont -->
           
                                            <!-- /.interest-gender -->
                                        </div>
                                        <!-- /.home_data-item -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->

                          
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