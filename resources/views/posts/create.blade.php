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
      <input type="text" class="form-control" id="title" name="title" placeholder="{{ old('title') }}">
      <label for="url">URL</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="{{ old('url') }}">
      <label for="content">Content</label>
      <textarea type="textarea" rows="5" class="form-control" id="content" name="content" placeholder="{{ old('content') }}"></textarea>
      <br>
      <button class="btn btn-primary btn-success">Create Post</button>
    </form>
    <br>
    <form action="{{ action('PostsController@destroy') }}" method="post">
      {!! csrf_field() !!}
      <button class="btn btn-primary btn-danger" name="button">Delete Post</button>
      {!! method_field('DELETE') !!}
    </form>
  </div>
</div>

@stop
