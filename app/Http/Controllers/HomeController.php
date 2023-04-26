<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $plants = Plant::paginate(12); // Fetch 12 plants per page
    return view('posts', compact('plants'));
}


    // Other methods...
}
