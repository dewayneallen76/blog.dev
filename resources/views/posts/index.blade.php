@extends('layouts.master')

@section('title')
  <title>All Posts</title>
@stop

@section('content')
<div class="container">
  <h1>All Posts</h1>
  <div class="row">
    @foreach($posts as $post)
    <div class="col">
      <div class="card border-dark mb-3" style="width: 20rem;">
        <img class="card-img-top" src="http://fillmurray.com/318/180" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{ $post->title}}</h4>
          <p class="card-text" style="overflow:hidden;">{{ $post->created_at}}</p>
          <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">Read Post</a>
        </div>
      </div>
      <br>
    </div>
    @endforeach
  </div>
</div>
@stop
