<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Tag::paginate();
      return view("tag.index", ["tags" => $data, "PageTitle" => "Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('tag.create', ['PageTitle' => 'Tags - Create Tag']);
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
      $data = Tag::find($id);
      return view('tag.show', ['tag' => $data, 'PageTitle' => 'Tags - Show Tag']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tag::find($id);
        return view('tag.edit', ['tag' => $data, 'PageTitle' => 'Tags - Edit Tag']);
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
