@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">


    
     <h2 class="mb-4">new lesson
    <a href="{{ route('admin.add.lesson',$course_id) }}">         
    <button type="button" class="btn btn-info" >add</button>
</a>
</h2>
  
             
  
<div class="col-md-12">
<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">كل الدروس</h3>
            </div>
            <div class="box-body">
           

              @if (count($lessons)>0)
              @foreach ($lessons as $lesson)
              
                    <div class="col-md-4">
                    <br>
                        <div class="timeline-item">
                          <div class="timeline-body">
                            <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
              @endforeach
                
              @else
                   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                لا يوجد دروس 
              </button>
              @endif
    
            
            </div>
          </div>
          <!-- /.box -->
        </div>
             </div><!-- /.box -->
            </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>


@endsection
