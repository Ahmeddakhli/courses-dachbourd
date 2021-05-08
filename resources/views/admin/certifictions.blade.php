@extends('layouts.admin')

@section('content')

    <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">


    <h2 class="mb-4">all sertifictions
         <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever=""> add</button>
</h2>
             
  
 <div class="container">
        <table class="table table-bordered table-hover">
            <thead >
               <tr>
                  <th>Name</th>
                  <th>course title</th>
                  <th>scoure</th>

                  <th>Status</th>
               </tr> 
            </thead>
            <tbody>
            
               @foreach($scores as $score)
                  <tr>
                     <td>{{ $score->user->name }}</td>
                     <td>{{ $score->course->title}}</td>
                       <td>{{ $score->score }}</td>
                     <td>
                     <input type="checkbox" id="activation-{{$score->id}}"
                                    onchange="testActive({{$score->status}},{{$score->id}})"
                                    {{$score->status == 1 ? 'checked' : ''}} data-toggle="toggle">
                                    
                     </td>
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    

          </div><!
            </div><!-- /.col -->
      
</div>
<script>
    function testActive(state, id){
        $.ajax({
            url: '/changeStatus',
            type: 'GET',
            datatype: 'json',
          data: {'status': state, 'id': id},

            success: function (data) {
                    console.log('success');

            },
            error:function(error){
          console.log('error');

            }
        });
    }
</script>
</body>

            
    



@endsection
