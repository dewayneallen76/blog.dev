@extends('layouts.master')

@section('title')
  <title>Login</title>
@stop

@section('content')
<div class="container">
  <h2>Login</h2>
  <div class="form-group">
    <form action="{{ action('Auth\AuthController@postLogin') }}" method="POST">
      {!! csrf_field() !!}
      <label for="email">Email</label>
      {!! $errors->first('email', '<div class="alert alert-danger">:message</div>') !!}
      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
      <label for="password">Password</label>
      {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
      <br>
      <button class="btn btn-primary btn-success">Login</button>
    </form>
  </div>
</div>
@stop
