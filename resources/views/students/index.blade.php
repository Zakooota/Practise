@extends('layouts.app')
@section('title' , 'Student List')

@section('content')

<h1>Students</h1>
                

                <hr>    
                @foreach($student as $students)
                <div class="row">
                    <div class="col-4">
                    {{$students->id}} 
                    </div>
                    <div class="col-4">
                    <a href="/students/{{$students->id}}">{{$students->name}}</a>
                    </div>
                    
                    <div class="col-4">
                      {{$students->program}}
                    </div>
                </div>
              @endforeach
@endsection