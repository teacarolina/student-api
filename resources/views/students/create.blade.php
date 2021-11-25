@extends('base')
@section('main')
<div>    
    <a style="margin: 19px;" href="{{ url('/students')}}" class="btn btn-primary">All students</a>
</div>
<div class="row"> 
    <div class="col-sm-8 offset-sm-2">    
        <h1 class="display-3">Add a student</h1>  
        <div>    
            @if ($errors->any())      
            <div class="alert alert-danger">        
                <ul>            
                    @foreach ($errors->all() as $error)              
                    <li>{{ $error }}</li>            
                    @endforeach        
                </ul>      
            </div><br />    
            @endif    
            <form method="post" action="{{ url('api/students') }}">          
                @csrf          
                <div class="form-group">                 
                    <label for="name">Name:</label>              
                    <input type="text" class="form-control" name="name"/>          
                </div>          
                <div class="form-group">              
                    <label for="course">Course:</label>              
                    <input type="text" class="form-control" name="course"/>          
                </div>                    
                <button type="submit" class="btn btn-danger">Add student</button>      
            </form>  
        </div>
    </div>
</div>
@endsection
