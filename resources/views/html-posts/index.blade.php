@extends('layouts.app')

@section('content')
    @foreach ($posts as $idx=>$post)
        <section>
            <?= $post ?>
        </section>
    @endforeach
@endsection
