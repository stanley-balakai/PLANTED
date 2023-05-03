<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Comment;
use Illuminate\Http\Request;

class PlantCommentController extends Controller
{
    public function store(Request $request, Plant $plant)
    {
        $request->validate([
            'body' => 'required|min:3',
        ]);

        $comment = new Comment([
            'body' => $request->input('body'),
            'user_id' => $request->user()->id,
        ]);

        $plant->comments()->save($comment);

        return back()->with('success', 'Comment added successfully.');
    }
}