@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
  <h1 class="text-5xl text-center pt-24">WELCOME <b>{{ auth()->user()->name }}</b> :)</h1>


@endsection