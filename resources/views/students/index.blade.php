@extends('base')
@section('main')
<div>    
    <a style="margin: 19px;" href="{{ url('/')}}" class="btn btn-primary">New student</a>
</div>
<div class="row">
    <div class="col-sm-12">     
        <h1 class="display-3">Students</h1>      
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
                    <td>                
                        <a href="{{ route('students.update', $student->id) }}" class="btn btn-primary">Edit</a>            
                    </td>            
                    <td>                
                        <form action="{{ url('api/students',$student->id)}}" method="post">                  
                            @csrf                  
                            @method('DELETE')                  
                            <button class="btn btn-danger" type="submit">Delete</button>                
                        </form>            
                    </td>     
                    <td>                
                        <form action="{{ url('api/students',$student->id)}}" method="post">                  
                            @csrf                  
                            @method('GET')                  
                            <button class="btn btn-primary" type="submit">Show</button>                
                        </form>                     
                    </td>    
                </tr> 
                @endforeach       
            </tbody>  
        </table>
        <div>
</div>
@endsection
