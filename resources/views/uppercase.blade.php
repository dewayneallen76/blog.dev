@extends('layouts.master')

@section('title')
  <title>Uppercase Word</title>
@stop

@section('content')
  <div class="container">
    <h2>You entered: {{ $word }}</h2>
    <h2>Uppercase: {{ $upperCaseWord }}</h2>

  </div>

@stop
