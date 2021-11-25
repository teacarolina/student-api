@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">     
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">All Students</span>
            <a style="margin: 15px; color: white;" href="{{ url('/')}}" class="btn btn-info">Add new student</a>
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
            @foreach($students as $student)        
                <tr>            
                    <td>{{$student->id}}</td>            
                    <td>{{$student->name}}</td>            
                    <td>{{$student->course}}</td>                   
                    <td class="col-1">                
                        <form action="{{ url('api/students',$student->id)}}" method="post">                  
                            @csrf                  
                            @method('GET')                  
                            <button class="btn btn-dark" type="submit">Show</button>                
                        </form>   
                    </td>            
                    <td class="col-1">                
                        <form action="{{ url('api/students',$student->id)}}" method="post">                  
                            @csrf                  
                            @method('DELETE')                  
                            <button class="btn btn-dark" type="submit">Delete</button>                
                        </form>            
                    </td>     
                    <td class="col-2">                
                        <a href="{{ route('students.update', $student->id) }}" class="btn btn-dark">Edit</a>            
                    </td>    
                </tr> 
                @endforeach       
            </tbody>  
        </table>
        <div>
</div>
@endsection
