@extends('layouts.master')

@section('title')
  <title>Roll Dice</title>
@stop

@section('content')
  <body>
    <div class="container">
      <h1>Random Roll: {{ $dice }}</h1>
      <h1>Your guess: {{ $guess }}</h1>
      <h1>{{ $message }}</h1>
    </div>
@stop
