<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Post::Paginate(10);
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
    public function store(Request $request)
    {
        // @TODO: Implement store logic
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
        $post = Post::find($id);
        return view('post.edit', ['post'=> $post, 'PageTitle' => 'Blog - Edit Post']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @TODO: Implement update logic
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @TODO: Implement destroy logic
    }
}
