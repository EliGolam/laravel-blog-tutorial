@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <section>
            <?= $post ?>
        </section>
    @endforeach
@endsection
