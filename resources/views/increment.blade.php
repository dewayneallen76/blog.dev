@extends('layouts.master')

@section('title')
  <title>Increment</title>
@stop

@section('content')
<div class="container">
  <h2>Your number: {{ $number }}</h2>
  <h2>Your number plus 1: {{ $numberPlusOne }}</h2>
  <a href="{{ action('HomeController@showWelcome') }}">Home</a>
</div>
@stop
