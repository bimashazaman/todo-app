@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="/bimasha.css">
    @endpush

@section('content')
    <br>
    <br>
    <br>


<h2>HOME</h2>
    <a href="{{Route('todoList')}}"><b>CLICK HERE</b></a>

@endsection

