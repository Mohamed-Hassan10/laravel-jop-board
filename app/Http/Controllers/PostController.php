<?php

namespace App\Http\Controllers;

use App\Models\Post;
use finfo;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index() {
    $data = Post::Paginate(5);

    return view("post.index", ["posts"=> $data, "PageTitle" => "Blog"]);
  }

  function show($id) {
    $post = Post::findOrFail($id);

    return view('post.show', ['post'=> $post, 'PageTitle' => $post->title]);
  }

  function create() {
    // $post = Post::create([
    //   'title' => 'My Find Posst',
    //   'body' => 'This is my content',
    //   'author' => 'Lilwah',
    //   'published' => true
    // ]);
    Post::factory(100)->create();

    return redirect('/blog');
  }

  function delete() {
    Post::destroy(7);
  }
}
