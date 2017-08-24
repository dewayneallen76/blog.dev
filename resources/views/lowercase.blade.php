@extends('layouts.master')

@section('title')
  <title>Lowercase Word</title>
@stop

@section('content')
  <div class="container">
    <h2>You entered: {{ $word }}</h2>
    <h2>Lowercase: {{ $lowerCaseWord }}</h2>
    <a href="{{ action('HomeController@upperCase', array($word)) }}">Uppercase</a>
  </div>

@stop
