@extends('layouts.app')
@section('title','Details for '. $customer->name)

@section('content')

        <div class="row">
            <div class="col-12 ">
                <h3>customer Details  {{$customer->name}}</h3>
                <p ><a href="/customers/{{$customer->id}}/edit">Edit Customer</a></p>
               
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Name:<strong>{{$customer->name}}</strong></p>
                <p>Email:<strong>{{$customer->email}}</strong></p>
                <p>Company:<strong>{{$customer->company->name}}</strong></p>
            </div>
            <form action="/customers/{{$customer->id}}" method ="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
        </div>
        
      
        



@endsection