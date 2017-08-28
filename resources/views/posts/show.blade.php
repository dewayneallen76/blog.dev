@extends('layouts.master')

@section('title')
  <title>Show Post</title>
@stop

@section('content')
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <h2>{{ $post->url }}</h2>
    <p>{{ $post->content }}</p>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn active" method="POST">Edit Post</a>
  </div>
@stop
