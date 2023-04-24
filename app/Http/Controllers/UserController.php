<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:45',
            'email' => 'required|string|email|max:55|unique:users,email,' . $user->id,
        ]);

        // Update the user's data
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect to the user's profile with a success message
        return redirect()->route('users.show', $user)->with('success', 'User profile updated successfully.');
    }
}
