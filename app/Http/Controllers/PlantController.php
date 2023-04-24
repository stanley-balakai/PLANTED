<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:45',
            'description' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Create a new plant
        $plant = Plant::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
            // Add other fields as needed
        ]);

        // Redirect to the newly created plant's page with a success message
        return redirect()->route('plants.show', $plant)->with('success', 'Plant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        return view('plants.show', compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plant $plant)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:45',
            'description' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Update the plant's data
        $plant->update([
            'title' => $request->title,
            'description' => $request->description,
            // Add other fields as needed
        ]);

        // Redirect to the plant's page with a success message
        return redirect()->route('plants.show', $plant)->with('success', 'Plant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return redirect()->route('plants.index')->with('success', 'Plant deleted successfully.');
    }
}