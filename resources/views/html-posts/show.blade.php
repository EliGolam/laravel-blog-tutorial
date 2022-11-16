@extends('layouts.app')

@section('content')
    <section>
        <section>
            {{-- @dd($post) --}}
            <h2><a href="/html-posts/{{$post->slug}}">{{ $post->title }}</a></h2>
            <p>{{ $post->body }}</p>
        </section>
    </section>
@endsection
