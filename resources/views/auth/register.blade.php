@extends('layouts.master')

@section('title')
  <title>Register</title>
@stop

@section('content')
<div class="container">
  <h2>Register</h2>
  <div class="form-group">
    <form action="{{ action('Auth\AuthController@postRegister')}}" method="POST">
      {!! csrf_field() !!}
      <label for="name">Name:</label>
      {!! $errors->first('name', '<div class="alert alert-danger">:message</div>') !!}
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
      <label for="email">Email:</label>
      {!! $errors->first('email', '<div class="alert alert-danger">:message</div>') !!}
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
      <label for="password">Password:</label>
      {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
      <label for="password_confirmation">Password Confirmation:</label>
      {!! $errors->first('password_confirmation', '<div class="alert alert-danger">:message</div>') !!}
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
      <br>
      <button class="btn btn-primary btn-success">Register</button>
    </form>
  </div>
</div>
@stop
