
@extends('layouts.main')    

@section('home')
<article>
    <h2>{{ $post -> title }}</h2>
    <h5>{{ $post -> author }}</h5>
    {{$post->body }}
</article>

<a href="/blog">Back</a>
@endsection