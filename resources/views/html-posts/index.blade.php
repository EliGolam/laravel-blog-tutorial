@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <section>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->excerpt }}</p>
        </section>
    @endforeach
@endsection
