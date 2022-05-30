@extends('layouts.app')
@section('title','Edit Details for' . $customer->name )
@section('content')

        <h1>Edit Details for {{$customer->name}}</h1>
        <form action="\customers\{{$customer->id}}" method="post" class="pb-5">
            @method('PATCH')
            @include('customers.form')
          <button class="btn btn-primary mt-3" type="submit"> Save Customer</button>
        </form>
      
        



@endsection