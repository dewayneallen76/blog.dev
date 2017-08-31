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
      <h3>Name: {{ $users->name }}</h3>
      <h4>Email: {{ $users->email }}</h4>
    </div>
    <div class="col">
      <h4 class="text-muted text-right">Member since: {{ $users->created_at }}</h4>
      @if(Auth::id() == $users->id)
      <h4 class="text-right"><a href="{{ action('UsersController@edit') }}">Edit User</a></h4>
      @endif
    </div>
  </div>
</div>
<div class="container">
  <hr>
  @if(Auth::id() == $users->id)
  <h1 class="text-center">My Posts</h1>
  @else
  <h1 class="text-center">Users Posts</h1>
  @endif
  <div class="row">
    @foreach($users->posts as $post)
    <div class="col">
      <div class="card border-dark mb-3" style="width: 20rem;">
        <img class="card-img-top" src="http://fillmurray.com/318/180" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{ $post->title}}</h4>
          <p class="card-text">{{ $post->created_at }}</p>
          <p class="card-text" style="max-height: 150px; overflow:hidden;">{{ $post->content }}</p>
          <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">View Post</a>
        </div>
      </div>
      <br>
    </div>
    @endforeach
  </div>
</div>
@stop
