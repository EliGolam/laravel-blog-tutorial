<x-app-layout>
    <x-slot name="title">Laravel Blog | All posts</x-slot>
    <x-slot name="titleHeading">All Posts !</x-slot>

    @foreach ($posts as $post)
        <section>
            <h3><a href="/html-posts/{{$post->slug}}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </section>
    @endforeach
</x-app-layout>
