<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::all();
        return view('profile.pages.plants.index', compact('plants'));
    }
    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('plants.show', compact('plant'));
    }
}
