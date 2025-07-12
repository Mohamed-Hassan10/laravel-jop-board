<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
    $data = Tag::all();

    return view("tag.index", ["tags"=> $data, "PageTitle" => "Tags"]);
  }

  function create() {
    Tag::create([
      'title' => 'CSS'
    ]);
    Tag::create([
      'title' => 'HTML'
    ]);

    return redirect('/tags');
  }

  function testManyToMany() {
    $post1 = Post::find(1);
  //   $post9 = Post::find(9);

    $post1->tags()->attach([1, 2, 3]);
  //   $post9->tags()->attach([2, 3]);

    return response()->json(([
      'post1' => $post1->tags,
      // 'post9' => $post9->tags
    ]));

  //   $tag = Tag::find(1);

  // return response()->json([
  //   'Tag' => $tag->title,
  //   'posts' => $tag->posts,
  // ]);
  }
}
