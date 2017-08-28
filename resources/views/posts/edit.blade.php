@extends('layouts.master')

@section('title')
  <title>Edit Post</title>
@stop

@section('content')
<div class="container">
  <h2>Edit Post</h2>
  <div class="form-group">
    <form action="{{ action('PostsController@update')}}" method="POST">
      {!! csrf_field() !!}
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="{{ old('title') }}">
      <label for="url">URL</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="{{ old('url') }}">
      <label for="content">Content</label>
      <textarea type="textarea" rows="5" class="form-control" id="content" name="content" placeholder="{{ old('content') }}"></textarea>
      <br>
      <button class="btn btn-primary btn-success">Edit Post</button>
      {!! method_field('PUT') !!  }
    </form>
    <br>
    <form action="{{ action('PostsController@destroy', array(1)) }}" method="POST">
      {!! csrf_field() !!}
      <button class="btn btn-primary btn-danger" name="button">Delete Post</button>
      {!! method_field('DELETE') !!}
    </form>
  </div>
</div>
@stop
