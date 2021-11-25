@extends('base')
@section('main')

<div class="row"> 
    <div class="col-sm-8 offset-sm-2">    
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Add student</span>
            <a style="margin: 19px; color: white;" href="{{ url('/students')}}" class="btn btn-info">All students</a>
        </nav>    
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
                <button type="submit" class="btn btn-dark">Add student</button>      
            </form>  
        </div>
    </div>
</div>
@endsection
