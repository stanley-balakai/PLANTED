<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Plant;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Plant $plant)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        // Create a new comment
        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'plant_id' => $plant->id,
        ]);

        // Redirect to the plant's page with a success message
        return redirect()->route('plants.show', $plant)->with('success', 'Comment added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        // Update the comment's data
        $comment->update([
            'content' => $request->content,
        ]);

        // Redirect to the plant's page with a success message
        return redirect()->route('plants.show', $comment->plant)->with('success', 'Comment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('plants.show', $comment->plant)->with('success', 'Comment deleted successfully.');
    }
}
