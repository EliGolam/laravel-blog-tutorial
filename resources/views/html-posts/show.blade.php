@extends('layouts.app')

@section('content')
    <section>
        <section>
            {{-- @dd($post) --}}
            <h2><a href="{{ route() }}"></a>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </section>
    </section>
@endsection
