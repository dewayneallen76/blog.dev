@extends('layouts.master')

@section('title')
  <title>User Profile</title>
@stop

@section('content')
<br>
<br>
<div class="container">
  <h1 class="text-center">User Profile</h1>
  <div class="row">
    <div class="col">
      <h2>Name: {{ $users->name }}</h2>
      <h4>Email: {{ $users->email }}</h4>
    </div>
    <div class="col">
      <h4 class="text-right">Member since: {{ $users->created_at->diffForHumans() }}</h4>
    </div>
  </div>
</div>
@stop
