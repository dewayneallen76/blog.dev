@extends('layouts.master')

@section('title')
  <title>Create A Post</title>
@stop

@section('content')
<div class="container">
  <h2>Create a new post</h2>
  <div class="form-group">
    <form action="{{ action('PostsController@store')}}" method="POST">
      {!! csrf_field() !!}
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{ old('title') }}">
      <label for="url">URL</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="Post Link" value="{{ old('url') }}">
      <label for="content">Content</label>
      <textarea type="textarea" rows="5" class="form-control" id="content" name="content" placeholder="Enter content for your post...">{{ old('content') }}</textarea>
      <br>
      <button class="btn btn-primary btn-success">Create Post</button>
    </form>
    <br>
    <form action="{{ action('PostsController@edit', array(1)) }}" method="GET">
      {!! csrf_field() !!}
      <button class="btn btn-primary btn-warning" name="button">Edit Post</button>
      {!! method_field('PUT') !!}
    </form>
  </div>
</div>

@stop
