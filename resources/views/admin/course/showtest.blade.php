@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">


    
    <a href="{{ route('admin.add.question', $id) }}">         
    <button type="button" class="btn btn-info" >add</button>
</a>

             
  
<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">all questions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
              @if(count($questions)>0)
                            @foreach ( $questions as $question )
                  <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$question->id}}" aria-expanded="false" class="collapsed">
                         {{ $question->question}}
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne{{$question->id}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
                     @for ($i = 1; $i < 4; $i++)
                                     <div class="answer" style=" margin-bottom: 10px; padding: 10px;background-color:#f1f1f1;">
                                                <label>
                                                    <span>الاجابه رقم({{$i}}) :</span>

                                                    <span>{{$question->$i}}</span>
                                                    
                                                </label>
                                            </div>
                                            <!-- end answer -->
                               @endfor
                                      <div class="answer" style=" margin-bottom: 10px; padding: 10px;background-color:rgb(106, 90, 205)
;">
                                                <label>
                                                    <span>الاجابه الصحيحه هى :</span>

                                                    <span>{{$question->correct_answer}}</span>
                                                    
                                                </label>
                                            </div>
                    </div>
                  </div>
                </div>
            @endforeach
            @else

                     <h1> لايوجد اسئله يمكنك اضافه سوال  </h1>
              @endif

     
  
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div><!-- /.box -->
            </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>


@endsection
