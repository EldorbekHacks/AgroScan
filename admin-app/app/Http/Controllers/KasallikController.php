<?php

namespace App\Http\Controllers;

use App\Models\Kasallik;

class KasallikController extends Controller
{
    public function index()
    {
        $kasalliklar = Kasallik::all();
        return view('profile.pages.kasallik.index', compact('kasalliklar'));
    }
    public function show($id)
    {
        $kasallik = Kasallik::findOrFail($id);
        return view('profile.pages.kasallik.show', compact('kasallik'));
    }
}
