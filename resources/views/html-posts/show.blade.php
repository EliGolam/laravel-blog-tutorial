<x-app-layout>
    <x-slot name="title">{{ $post->title }}</x-slot>
    <x-slot name="titleHeading">{{ $post->title }}</x-slot>

    <h2 style="font-size: .8rem; color: grey;"><em>{{ $post->category->name }}</em></h2>
    <p>{{ $post->body }}</p>

    <a href="{{ route('html-posts') }}">Go back</a>
</x-app-layout>


{{-- @extends('layouts.app')

@section('content')
    <section>
        <section>
            <h2><a href="/html-posts/{{$post->slug}}">{{ $post->title }}</a></h2>
            <p>{{ $post->body }}</p>
        </section>
    </section>
@endsection --}}
