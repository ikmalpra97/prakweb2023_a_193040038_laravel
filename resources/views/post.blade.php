@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->tittle }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/blog">back to Posts</a>
@endsection