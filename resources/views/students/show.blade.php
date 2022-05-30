@extends('layouts.app')
@section('tiltle','Student Details . {{$student->name}}')
@section('content')



<div class="row">
            <div class="col-12">
                <h3>Student Details  {{$student->name}}</h3>
                <p><a href="/students/{{$student->id}}/edit">Edit Student</a></p>
            </div>

<div class="row">
    <div class="col-12">
       
    
      
        <h6>Name: <span class="bold">{{$student->name}}</span></h6>
         
         <h6>Email: <span class="bold">{{$student->email}}</span></h6>
         
         <h6>Address <span class="bold">{{$student->address}}</span></h6>
         
          
       <ul> 
       <p>  Registered Courses </p>
          @foreach($student->courses as $course) 
          
          <li> {{$course->name}}</li>   
           @endforeach
        
         
         </ul>
        


       
    </div>
</div>


@endsection