@extends('base')
@section('main')
<div class="row">    
    <div class="col-sm-8 offset-sm-2">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Update student</span>
            <a style="margin: 19px; color: white;" href="{{ url('/students')}}" class="btn btn-info">All students</a>
        </nav>          
      
        
        
                                        
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
            <button type="submit" class="btn btn-dark">Update</button>        
        </form>    
    </div>
</div>



@endsection
