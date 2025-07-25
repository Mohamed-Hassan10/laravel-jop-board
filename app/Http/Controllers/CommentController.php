<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Comment::paginate(10);
      return view("comment.index", ["comments" => $data, "PageTitle" => "Comments"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('comment.create', ['PageTitle' => 'Comments - Create Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
      $comment = new Comment();
      $comment->author = $request->input('author');
      $comment->content = $request->input('content');
      $comment->post_id = $request->input('post_id');
      $comment->save();

      return redirect("/blog/{$comment->post_id}")->with('success', 'Comment Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::find($id);
        return view('comment.show', ['comment'=> $comment, 'PageTitle' => 'Comments - Show Comment']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::find($id);
        return view('comment.edit', ['comment'=> $comment, 'PageTitle' => 'Comments - Edit Comment']);
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
