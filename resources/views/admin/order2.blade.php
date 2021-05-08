@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">


    <h2 class="mb-4">all orders       
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
