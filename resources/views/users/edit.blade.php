@extends('layouts.master')

@section('title')
  <title>Edit User</title>
@stop

@section('content')
<div class="container">
  <h2>Edit User</h2>
  <div class="form-group">
    <form action="{{ action('UsersController@update', $users->id) }}" method="POST">
      {!! csrf_field() !!}
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="{{ $users->name }}" value="{{ old('name') }}">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="{{ $users->email }}" value="{{ old('email') }}">
      @if($errors->has('password'))
        <div class="alert alert-danger">
          {{ $errors->first('password') }}
        </div>
      @endif
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="{{ $users->password }}" value="{{ $users->password }}">
      @if($errors->has('password'))
        <div class="alert alert-danger">
          {{ $errors->first('password_confirmation') }}
        </div>
      @endif
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
      <br>
      <button class="btn btn-primary btn-success">Edit User</button>
      {!! method_field('PUT') !!}
    </form>
  </div>
</div>
@stop
