@extends('layouts.master')

@section('title')
  <title>Create A Post</title>
@stop

@section('content')
<div class="container">
  @if(Auth::check())
  <h2>Create a new post</h2>
  <div class="form-group">
    <form action="{{ action('PostsController@store')}}" method="POST">
      {!! csrf_field() !!}
      <label for="title">Title</label>
      {!! $errors->first('title', '<div class="alert alert-danger">:message</div>') !!}
      <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{ old('title') }}">
      <label for="url">URL</label>
      {!! $errors->first('url', '<div class="alert alert-danger">:message</div>') !!}
      <input type="text" class="form-control" id="url" name="url" placeholder="Post Link" value="{{ old('url') }}">
      <label for="content">Content</label>
      {!! $errors->first('content', '<div class="alert alert-danger">:message</div>') !!}
      <textarea type="textarea" rows="5" class="form-control" id="content" name="content" placeholder="Enter content for your post...">{{ old('content') }}</textarea>
      <br>
      <button class="btn btn-primary btn-success">Create Post</button>
    </form>
  </div>
  @else
  <div class="container">
    <h1 class="text-center">You must be logged in to create a post!</h1>
    <h1 class="text-center">Please <a href="/auth/login">Login</a> or <a href="/auth/register">Register</a></h1>
  </div>
  @endif
</div>

@stop
