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
      <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
      <h2>{{ $post->url }}</h2>
      <p>{{ $post->content }}</p>
    </div>
    @endforeach
  </div>
</div>
@stop
