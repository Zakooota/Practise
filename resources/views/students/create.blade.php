@extends('layouts.app')
@section('tilte','Add New Student')
@section('content')

<form action="{{route('students.store')}}" method="post"> {{-- {{url('/students')}} for complete url address --}}
    {{--naming the route gives us advantage so if we change the name in of our route in web file nothing will affect the code--}}
@include('Students.form')
<button class="btn btn-primary mt-3" type="submit">Add Student</button>
</form>
@endsection