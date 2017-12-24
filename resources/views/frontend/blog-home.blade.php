@extends('layout.blog-home-master')

@section('content')

<div class="col-sm-8 blog-main">

    <div class="blog-post">

        @if(count($posts) > 0)

            @foreach($posts as $post)
                <h2 class="blog-post-title"><a href="/showPost/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} <a href="#">{{ $post->author }}</a></p>
            @endforeach
        
        @endif

     </div>
</div>

@stop 