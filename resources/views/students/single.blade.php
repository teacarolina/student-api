@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Student information</span>
            <a style="margin: 19px; color: white;" href="{{ url('/students')}}" class="btn btn-info">All students</a>
        </nav>          
        <div class="col-sm-12">  
            @if(session()->get('success'))    
            <div class="alert alert-success">      
                {{ session()->get('success') }}      
            </div>  
            @endif
        </div>
        <table class="table table-striped">    
            <thead>        
                <tr>          
                    <td>ID</td>          
                    <td>Name</td>          
                    <td>Course</td>                
                    <td colspan = 3>Actions</td>        
                </tr>    
            </thead>    
            <tbody>
                <tr>            
                    <td>{{$student->id}}</td>            
                    <td>{{$student->name}}</td>            
                    <td>{{$student->course}}</td>                   
                    <td class="col-1">                
                        <a href="{{ route('students.update', $student->id) }}" class="btn btn-dark">Edit</a>            
                    </td>            
                    <td class="col-2">                
                        <form action="{{ url('api/students',$student->id)}}" method="post">                  
                            @csrf                  
                            @method('DELETE')                  
                            <button class="btn btn-dark" type="submit">Delete</button>                
                        </form>            
                    </td>     
                </tr> 
            </tbody>  
        </table>
        <div>
</div>
@endsection
