<x-app-layout>
    <x-slot name="title">All posts</x-slot>
    <x-slot name="titleHeading">All Posts !</x-slot>

    @foreach ($posts as $post)
        <section>
            <h3><a href="{{ route('html-posts.show', $post) }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </section>
    @endforeach
</x-app-layout>
