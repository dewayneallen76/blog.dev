@extends('layouts.master')

@section('title')
  <title>Increment</title>
@stop

@section('content')
<div class="container">
  <h2>Your number incremented number: {{ $number }}</h2>
  <a href="{{ action('HomeController@increment', array($number)) }}">Increase {{ $number }}</a>
</div>
@stop
