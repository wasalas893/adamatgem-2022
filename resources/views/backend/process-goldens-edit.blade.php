



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Goldens</h3>
      </div>
     
      <form action="{{route('update.process_goldens',$process_goldens->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Process Goldens Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_golden_header" placeholder="Enter Description" rows="3" value="{{$process_goldens->process_golden_header}}">{{$process_goldens->process_golden_header}}</textarea>
            @error('process_golden_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Process Goldens Text</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_golden_text" placeholder="Enter Description" rows="3" value="{{$process_goldens->process_golden_text}}">{{$process_goldens->process_golden_text}}</textarea>
            @error('process_golden_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Process Goldens Slider Image 1 (W:547px,H:318px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image1" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image1}}">
                
              </div>

              @error('process_golden_image1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($process_goldens->process_golden_image1)}}" style="height: 150px; width:200px">
        
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Process Goldens Slider Image 2 (W:547px,H:318px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image2" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image2}}">
                
              </div>

              @error('process_golden_image2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($process_goldens->process_golden_image2)}}" style="height: 150px; width:200px">
        
            </div>

          <div class="form-group">
            <label for="exampleInputFile">Process Goldens Slider Image 3 (W:547px,H:318px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image3" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image3}}">
                
              </div>

              @error('process_golden_image3')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($process_goldens->process_golden_image3)}}" style="height: 150px; width:200px">
        
            </div>

          <div class="form-group">
            <label for="exampleInputFile">Process Goldens Slider Image 4 (W:547px,H:318px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image4" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image4}}">
                
              </div>

              @error('process_golden_image4')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($process_goldens->process_golden_image4)}}" style="height: 150px; width:200px">
        
            </div>


          <div class="form-group">
            <label for="exampleInputFile">Process Goldens Slider Image 5 (W:547px,H:318px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image5" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image5}}">
                
              </div>

              @error('process_golden_image5')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($process_goldens->process_golden_image5)}}" style="height: 150px; width:200px">
        
            </div>


      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_goldens" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>


</div>
    </div>
</div>

</div>
@endsection