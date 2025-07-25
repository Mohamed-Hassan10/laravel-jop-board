<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Post::latest()->Paginate(10);
      return view("post.index", ["posts"=> $data, "PageTitle" => "Blog"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('post.create', ['PageTitle' => 'Blog - Create Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {

      $post = new Post();
      $post->title = $request->input('title');
      $post->author = $request->input('author');
      $post->body = $request->input('body');
      $post->published = $request->has('published');

      $post->save();

      return redirect('/blog')->with('success', 'Post Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $post = Post::find($id);
      return view('post.show', ['post'=> $post, 'PageTitle' => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post'=> $post, 'PageTitle' => 'Blog - Edit Post ' . $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {

        print_r($request->all());
        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');
        $post->save();

      return redirect('/blog')->with('success', 'Post Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        print_r($id);
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/blog')->with('success', 'Post Deleted Successfully!');
    }
}
