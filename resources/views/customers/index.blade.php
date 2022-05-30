@extends('layouts.app')
@section('title')
Customer list
@endsection
@section('content')

        <h1>Customers</h1>
                

        <hr>    
        @foreach($customers as $customer)
        <div class="row">
            <div class="col-2">
                
            {{$customer->id}}
            </div>
            <div class="col-4">
              <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
            </div>
            <div class="col-4">
              {{$customer->company->name}}
            </div>
            <div class="col-2">
              {{$customer->active}}
            </div>
        </div>
      @endforeach
        



@endsection