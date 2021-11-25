@extends('base')
@section('main')
<div class="row">    
    <div class="col-sm-8 offset-sm-2">        
        <h1 class="display-3">Update a student</h1>        
      
        
        
                                        
        <form method="post" action="{{ url('api/students',$student->id)}}">            
            @method('PATCH')             
            @csrf            
            <div class="form-group">                
                <label for="name">Name:</label>                
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" />            
            </div>            
            <div class="form-group">                
                <label for="course">Course:</label>                
                <input type="text" class="form-control" name="course" value="{{ $student->course }}" />            
            </div>                             
            <button type="submit" class="btn btn-primary">Update</button>        
        </form>    
    </div>
</div>
@endsection
