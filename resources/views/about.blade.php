@extends('layouts.main')

@section('home')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt=" {{ $name}}" width = "700" >
@endsection