@extends('layouts.admin')

@section('content')

    <div class="row content-header">
            <div class="col-md-12 ">
              <div class="box ">


    <h2 class="mb-4"> setting table
</h2>
             
  
 <div class="container">
        <table class="table table-bordered table-hover">
            <thead style="background-color:#85929E">
               <tr>
                  <th>no</th>
                  <th>اسم الصفحه</th>
                  <th>تعديل</th>

               </tr> 
            </thead>
            <tbody>
            
                <tr>
                    <th scope="row">1</th>
                    <td><h1>من نحن</h1></td>
                    <td>   <a href="{{ route('admincourse') }}">         
    <button type="button" class="btn btn-info" >add</button>
</a></td>
                   
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><h1>روابط السوشيال</h1></td>
                    <td>   <a href="{{ route('settingtablelinks') }}">         
    <button type="button" class="btn btn-info" >عرض الاعددات</button>
</a></td>
   
                  </tr>
              
            </tbody>
        </table>
    </div>
   
    

          </div>
            </div><!-- /.col -->
      
</div>

</body>

            
    



@endsection
