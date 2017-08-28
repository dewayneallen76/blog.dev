@extends('layouts.master')

@section('title')
  <title>All Posts</title>
@stop

@section('content')
<div class="container">
  @foreach($posts as $post)
  <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
  <h2>{{ $post->url }}</h2>
  <p>{{ $post->content }}</p>
  @endforeach
</div>
@stop
