@extends('layouts.app')
@section('tilte','Edit')
@section('content')

<form action="/students/{{$student->id}}" method="post">
@method('PATCH')
@include('students.form')
<button class="btn btn-primary mt-3" type="submit">Save</button>

</form>


@endsection