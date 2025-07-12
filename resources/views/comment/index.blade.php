<x-layout :title="$PageTitle">
  <h2>Comments Exploring P  aage</h2>
  @foreach ($comments as $comment)
    <h1>{{ $comment->author }}</h1>
    <p>{{ $comment->content }}</p>
    <p><a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title}}</a></p>
    <hr>
  @endforeach
</x-layout>
