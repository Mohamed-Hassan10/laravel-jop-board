<x-layout :title="$PageTitle">
    <h1>{{ $comment->author }}</h1>
    <p>{{ $comment->content }}</p>
    <p><a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title}}</a></p>
</x-layout>
