@extends('layouts.master')

@section('title')
  <title>Show Post</title>
@stop

@section('content')
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{ $post->title }}</h1>
        <h4><a href="http://google.com" target="_blank">{{ $post->url }}</a></h4>
      </div>
      <div class="col">
        <br>
        <h5 class="text-right">Added by: {{ $post->user->name }}</h5>
        <h6 class="text-muted text-right">Created: {{ $post->created_at->diffForHumans() }}</h6>
        <h6 class="text-muted text-right">Updated: {{ $post->updated_at->diffForHumans() }}</h6>
      </div>
    </div>
    <p>{{ $post->content }}</p>
    <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary btn active">Edit Post</a>
  </div>
@stop
