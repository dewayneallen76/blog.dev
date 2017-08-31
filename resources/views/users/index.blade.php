@extends('layouts.master')

@section('title')
  <title>All Users</title>
@stop

@section('content')
<div class="container">
  <h1>All Users</h1>
  @foreach($users as $user)
  <div class="row">
    <div class="col">
      <p><a href="{{ action('UsersController@show', $user->id) }}">{{ $user->name }}</a></p>
    </div>
    <div class="col">
      <p class="text-right">{{ $user->email }}</p>
    </div>
  </div>
  <hr>
  @endforeach
</div>

@stop
