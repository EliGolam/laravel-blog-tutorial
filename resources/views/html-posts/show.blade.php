<x-app-layout>
    <x-slot name="title">Laravel Blog | {{ $post->title }}</x-slot>
    <x-slot name="titleHeading">{{ $post->title }}</x-slot>

    <p>{{ $post->body }}</p>
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
