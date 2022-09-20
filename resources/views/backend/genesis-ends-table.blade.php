



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Genesis Last Section</h3>
      </div>
     
      <form action="{{route('add.genesis_ends')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
    

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Last Header 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_ends_text1" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_ends_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Last Header 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_ends_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_ends_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Last Header 3</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_ends_text3" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_ends_text3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


        <div class="form-group">
            <label for="exampleInputFile">Genesis Last Image 1 (W:128px,H:130px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_ends_image1" class="form-control" id="exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              @error('genesis_ends_image1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>
        <img id="output" width="100px"/>

        <div class="form-group">
            <label for="exampleInputCategory">Genesis Last Image 1 Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_image1_text1" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_image1_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputCategory">Genesis Ends Image 1 Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_image1_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_image1_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputFile">Genesis Ends Image 2 (W:128px,H:130px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_ends_image2" class="form-control" id="exampleInputFile" onchange="loandFile2(event)">
                
              </div>

              @error('genesis_ends_image2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <img id="output1" width="100px"/>

        <div class="form-group">
            <label for="exampleInputCategory">Genesis Ends Image 2 Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_image2_text1" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_image2_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputCategory">Genesis Ends Image 2 Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_image2_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_image2_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/genesis_ends" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

</div>

    </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
  output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile2=function(event) {

var output=document.getElementById('output1');
output.src=URL.createObjectURL(event.target.files[0]); 
};



</script>

</div>
@endsection