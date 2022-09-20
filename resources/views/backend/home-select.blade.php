
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Home / Our Values</h3>
              @if(count($home_selects) < 3)
                <a href="{{route('all.adamant_select_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>   
            <img src="/images/Web-view/Screenshot_4.jpg" style="width:auto;height:auto">
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example25" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Logo</th>
                  <th>Header</th>

                  
                  <th>Description</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

             

                @foreach($home_selects as $home_select)
                 <tr>
                  
                  
                   <td><img src="{{asset($home_select->home_selectus_logo)}}" style="height: 40px; width:40px;"></td>
                   <td>{{$home_select->home_selectus_header}}</td>
                  
                   <td>{{$home_select->home_selectus_body}}</td>
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.adamant_select',$home_select->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                   </div>
                   </td>
                   
                 
                 </tr>
                 @endforeach 

               
   
               </tbody>
            
              </table>
          

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->




  

 @endsection



 










