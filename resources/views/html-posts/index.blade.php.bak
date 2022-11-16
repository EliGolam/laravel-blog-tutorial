@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <section>
            <h3><a href="/html-posts/{{$post->slug}}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </section>
    @endforeach
@endsection
