@extends('layouts.admin')

@section('content')

    <div class="row">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
     <div class="box">

        <div class="col-md-6">
             <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="chart">
                <h1>{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() 
                    !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>

                 
</div>
                               
      <div class="card">

                <div class="card-body">     
        <div class="col-md-6"  style="">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="chart">
                <h1>{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>
                  
                                         </div>

            </div>
    
</div>

                    

    

                </div>

            </div>
          </div>  
        </div>
    </div>
            <div class="col-md-12">
              <div class="box">
      
             
      <div class="card">

                <div class="card-body">
    <h2 class="mb-4">all users
    <a href="{{ route('registuser') }}">         
    <button type="button" class="btn btn-primary" >add</button>
</a>

</h2>

    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>الاسم</th>
                <th>الايميل</th>
                <th>اسم المستخدم</th>
                <th>رقم الهاتف </th>
                <th>الجنس</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

                  </div><!-- /.box -->
            </div><!-- /.col -->
                  </div><!-- /.box -->
            </div><!-- /.col -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>


 
  @php
             use App\Models\Adminnotifcation;
              $newuser=  Adminnotifcation::where('isseen', '=', 0)->get();
              foreach($newuser as $user){
               $user->update(['isseen' => 1]);
              };
           @endphp
@endsection
@section('js')

{!! $chart1->renderChartJsLibrary() !!}

{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js
"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('client') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'username', name: 'username'},
            {data: 'phone', name: 'phone'},
            {data: 'sex', name: 'sex'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
$(document).ready(function() {
    var table = $('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
$('user').DataTable({
        responsive: true
})
</script>


@endsection