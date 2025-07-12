<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use finfo;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function index() {
    $data = Comment::all();

    return view("comment.index", ["comments"=> $data, "PageTitle" => "Blog"]);
  }

  function create() {
    // $comment = Comment::create([
    //   'author' => 'Lilwah',
    //   'content'=> 'this is a test comment',
    //   'post_id'=> 7,
    // ]);

    Comment::factory(10)->create();

    return redirect('/comments');
  }
}
