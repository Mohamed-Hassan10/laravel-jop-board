<x-layout :title="$PageTitle">
  <h2>{{ $PageTitle }} Page</h2>
  @foreach ($posts as $post)
    <h1 class="text-2xl">{{ $post->title }}</h1>
    <p class="text-1xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
    @foreach ($post->comments as $comment)
    <p>{{ $comment->author }}</p>
    <p>{{ $comment->content }}</p>

    @endforeach
  @endforeach

    {{ $posts->links() }}
</x-layout>
