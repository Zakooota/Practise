@extends('layouts.app')
@section('title','Add New Customer')
@section('content')

        <h1>Add Customer Details</h1>
        <form action="/customers" method="post" class="pb-5">
            
            @include('customers.form')
          <button class="btn btn-primary mt-3" type="submit"> Add New Customer</button>
        </form>
      
        



@endsection