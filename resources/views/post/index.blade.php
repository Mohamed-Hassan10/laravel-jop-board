<x-layout :title="$PageTitle">
  @if (session('success'))
    <div class="bg-green-50 px-3 py-2">
      {{ session('success') }}
    </div>
  @endif

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>
  </div>
  @foreach ($posts as $post)
  <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2 ">
    <div>
      <h1 class="text-2xl"><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h1>
      <p class="text-1xl">{{ $post->author }}</p>
    </div>
    <div>
      <a href="/blog/{{ $post->id }}/edit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Edit
      </a>

      <form action="/blog/{{ $post->id }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
        @csrf
        @method('DELETE')
        <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Delete
        </button>
      </form>
    </div>
  </div>
  @endforeach

    {{ $posts->links() }}
</x-layout>
