@extends('base')

@section('title', $post->title)

@section('content')
    <h1 class="text-xl font-bold">{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
@endsection