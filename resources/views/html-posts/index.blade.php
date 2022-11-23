<x-app-layout>
    <x-slot name="title">All posts</x-slot>
    <x-slot name="titleHeading">All Posts !</x-slot>

    @foreach ($posts as $post)
        <section>
            <h3><a href="{{ route('html-posts.show', $post) }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
            <p><em>{{ $post->category->name }}</em></p>
            <p>by <a href="{{ route('authors.show', $post->author) }}">{{ $post->author->name }}</a></p>
        </section>
    @endforeach
</x-app-layout>
