@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->tittle }}</h2>
        <p>By. Ilham Akmal in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</p></a>
        {!! $post->body !!}
    </article>

    <a href="/blog">back to Posts</a>
@endsection