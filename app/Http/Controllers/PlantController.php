<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $plants = Cache::remember('plants', 60 * 60, function () {
        return Plant::paginate(12);
    });

    return view('posts', compact('plants'));
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

        Cache::forget('plants');

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

        Cache::forget('plants');
        
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
        Cache::forget('plants');
        $plant->delete();
        return redirect()->route('plants.index')->with('success', 'Plant deleted successfully.');
    }
    
    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
    
        $plants = Plant::query()
            ->where('name', 'LIKE', "%{$searchTerm}%")
            ->orWhereHas('user', function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%{$searchTerm}%");
            })
            ->orWhereHas('category', function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%{$searchTerm}%");
            })
            ->orWhere('description', 'LIKE', "%{$searchTerm}%")
            ->paginate(12);
    
        return view('posts', ['plants' => $plants, 'searchTerm' => $searchTerm]);
    }
    
    
}


