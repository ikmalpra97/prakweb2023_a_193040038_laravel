@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $post)
        <article class=mb-5>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->tittle }}</h2></a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach    

@endsection
