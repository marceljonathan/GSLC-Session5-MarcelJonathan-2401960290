@extends('template')

@section('title', 'Edit Books')

@include('header2')

@section('content')
    <h1>Edit Book Page</h1>
    <h3>At this page you can add, update, or delete books</h3>
    <br>
    <br>

    @include('addBooks')

    <br>
    <br>
    <br>

    @include('deleteBooks')

@endsection

{{-- @include('deleteBooks') --}}
