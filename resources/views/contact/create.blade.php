@extends('layouts.app')
@section('title','Add New Customer')
@section('content')




<h3> Contact-Us   </h3>
@if(session()->has('message'))
<div class="alert alert-success" role="alert"><strong>Success</strong> {{session()->get('message')}}</div> 
@endif
@if( ! session()->has('message'))
<form action="/contact" method="post">

<label for="name">Name</label>    
           <div class="form-group">
                 <input  class="form-control" type="text" name="name" value="{{old('name')}}">
                 
            </div>
            <div>{{$errors->first('name')}}   </div>
           <label for="email">Email</label>    
           <div class="form-group">
                 <input class="form-control" type="text" name="email" value="{{old('email')}}">
                 
            </div>
            <div>{{$errors->first('email')}}   </div>
           <label for="email">Message</label>    
           <div class="form-group">
                <textarea name="message" id="message" value="{{old('messgae')}}" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div>{{$errors->first('message')}}   </div>
             <button class="btn btn-primary" type ="submit">Send Message</button>
             @csrf
</form>
@endif
@endsection