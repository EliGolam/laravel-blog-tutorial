<x-app-layout>
    <x-slot name="title">{{ $category->name }}</x-slot>
    <x-slot name="titleHeading">{{ $category->name }}</x-slot>

    @foreach ($posts as $post)
        <h3>{{ $post->name }} by {{ $post->author->name }}</h3>
        <p>{{ $post->excerpt }}</p>
    @endforeach

</x-app-layout>
