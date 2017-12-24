@extends('layout.blog-home-master')

@section('content')

    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->author}} {{ $post->created_at->diffForHumans() }}</h3>
    <h4>{{ $post->content }}</h4>

@stop