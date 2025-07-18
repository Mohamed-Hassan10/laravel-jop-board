<x-layout :title="$PageTitle">
  <h2>Tag</h2>
  <h1>{{ $tag->title }}</h1>

  <h3>Related Posts</h3>
  @if($tag->posts->isEmpty())
    <p>No posts related to this tag.</p>
  @else
    <ul>
      @foreach($tag->posts as $post)
        <li>
          <p>{{ $post->title }}</p>
          <p>{{ $post->body }}</p>
          <p>Post By: {{ $post->author}}</p>
          <a href="{{ route('post.show', $post->id) }}">View Full Post</a>
        </li>
      @endforeach
    </ul>
  @endif
</x-layout>
