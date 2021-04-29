@extends('layouts.admin')

@section('content')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">


@if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif

 
<table id="example" class="stripe row-border order-column" style="width:100% ; hieght:100%">
        <thead>
              <tr>
                      <th >#</th>
                      <th>user name</th>
                      <th> full name</th>
                       <th> phone </th>
                        <th>  email  </th>
                      
                        <th width="50">sex</th>
                        <th >tags </th>
                      <th >actions </th>
                    
                    </tr>
        </thead>
        <tbody>
               @foreach ($data as $key => $client)
                    <tr>
                    
                    <td colspan="">{{ $client->id}}</td>
                    <td colspan="">{{ $client->name}}</td>
                    <td colspan="">{{ $client->username}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->email}}</td>
                       <td>{{$client->sex}}</td> 
                        <td>
                   @foreach ($client->tags as $key => $service) 
                   <li>
                      ({{ $service->title}})
                    </li>
                   @endforeach
                  </ul> </td>
                           
              <td> 
                    <form action="" method="post">
                    @csrf
                    {{method_field('delete')}}
                    <button class='btn btn-danger' onclick="return confirm('Are you sure?you want to delete this فكر تانى ')"> <i class="fa fa-trash"></i></button>
                                
                    <a class="btn btn-success"  href=""><i class="fa fa-edit"></i></a>
                  
                  <a class="btn btn-info"  href="{{ route('usershow', $client->id) }}">  <i class="fa fa-eye"></i></a>

                    </form>
                          </td> 

                
                            
                    </tr>
                   @endforeach 
          
        </tbody>
    </table>
  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <form method="get" action="" >
              @csrf
            
   
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea name="masseg" class="form-control" id="message-text"></textarea>
          </div>
          
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">

                $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
  
})
   </script>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>


<script >
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
@endsection