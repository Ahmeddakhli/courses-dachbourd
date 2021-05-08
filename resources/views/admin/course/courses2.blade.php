@extends('layouts.admin')

@section('content')
    <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">
<div class='card'> <div class='card-body'>

     <h2 class="mb-4">all courses  
    <a href="{{ route('admincourse') }}">         
    <button type="button" class="btn btn-info" >add</button>
</a>
</h2>
             
    {!!$dataTable->table([  
        'class'=>'dataTable table table-striped table-hover table bordered'],true)
    
    !!}

             </div><!-- /.box -->
            </div><
              </div><!-- /.box -->
            </div><!-- /.col -->
      
</div>

@push('jss')

<script src="/vendor/datatables/buttons.server-side.js"></script>
  {!!$dataTable->scripts()!!}

@endpush

@endsection
