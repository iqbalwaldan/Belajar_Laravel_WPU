@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p> 
    <a href="{!! URL::to('/') !!}">
        <img src="{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle"/>
    </a>
@endsection