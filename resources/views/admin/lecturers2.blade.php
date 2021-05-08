@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">


    <h2 class="mb-4">all lecturers    
     <a href="{{ route('registlectuer') }}"> 
         <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever=""> add</button>
 </a>
 </h2>
             
    {!!$dataTable->table([  
        'class'=>'dataTable table table-striped table-hover  table table-bordered yajra-datatable'])
    
    !!}

            
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>

@push('jss')


  {!!$dataTable->scripts()!!}

@endpush

@endsection
