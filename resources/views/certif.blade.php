@extends('layouts.front')

@section('content')

        <div class="up-container">
            <div class="up-header text-center">
                <div class="container">
                    <h1>مبروك لقد اتممت هذه الدورة بنجاح</h1>
                     <h1>your course score {{$score}}%   
                    <form action="{{route('certorder')}}" method="get">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course_id}}"/>
                        <input type="hidden" name="score" value="{{$score}}"/>

                            <button type="submit" class="btn btn-primary"> طلب الشهاده </button>
                    </form></h1>  
                </div>
               @php
                                    use App\Models\Course;
 $course= Course::find( $course_id);
                                @endphp
                <!-- /.container -->
            </div>
            <!-- /.up-header -->
            <div class="up-box">
                <div class="container">
                    <div class="up-form certf-container">
              
                    
                        <div class="certficat-box text-center" id="Certification">
                            <h1>شهادة اتمام دورة</h1>
                            <span>تمنح الي الطالب</span>
                            <h2>{{Auth::user()->name}}</h2>
                            <h4>لإجتيازه اختبار مادة</h4>
                            <p> {{ $course->title}}</p>

                            <div class="admin-log">
                                <div class="cer-date">
                                    تاريخ
                                </div>
                                <div class="date">
                                    10/10/2010
                                </div>
                            </div>
                            <div class="admin-log1">
                                <div class="cer-date">
                                    توقيع
                                </div>
                             
                                <div class="date">
                            {{ $course->lecturer->name}}     
                                </div>
                            </div>

                        </div>
                        <!-- end certificate-box -->
                    </div>
                    <!-- /.up-form -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.up-box -->
        </div>
        <!-- /.up-container -->

    
    <input type="button" onclick="printDiv('Certification')" value="print a div!" />

  
    <script language="javascript" type="text/javascript">
        function printDiv(Certification) {
            var printContents = document.getElementById(Certification).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
<x-guest-layout>

</x-guest-layout>