<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:plant list', ['only' => ['index', 'show']]);
        $this->middleware('can:plant create', ['only' => ['create', 'store']]);
        $this->middleware('can:plant edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:plant delete', ['only' => ['destroy']]);
    }
    // 🌱 Barcha o'simliklarni ko'rsatish
    public function index()
    {
        $plants = (new Plant)->newQuery();

        // Qidiruv (search)
        if (request()->has('search')) {
            $plants->where('name', 'like', '%' . request()->input('search') . '%');
        }

        // Saralash (sort)
        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';

            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }

            $plants->orderBy($attribute, $sort_order);
        } else {
            $plants->latest(); // default: created_at DESC
        }

        // Paginatsiya
        $plants = $plants->paginate(config('admin.paginate.per_page'))
            ->onEachSide(config('admin.paginate.each_side'))
            ->appends(request()->query()); // search/sort query saqlanadi

        return view('admin.plants.index', compact('plants'));
    }


    // 🌱 Yangi o‘simlik formasi
    public function create()
    {
        return view('admin.plants.create');
    }

    // 🌱 Yangi o‘simlikni saqlash
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'muddat' => 'nullable|string|max:255',
            'suv' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('plants', 'public');
        }

        Plant::create($validated);

        return redirect()->route('admin.plants.index')->with('success', 'Plant created successfully.');
    }

    // 🌱 Tahrirlash formasi
    public function edit($id)
    {
        $plant = Plant::findOrFail($id);
        return view('admin.plants.edit', compact('plant'));
    }

    // 🌱 Yangilash
    public function update(Request $request, Plant $plant)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'muddat' => 'nullable|string|max:255',
            'suv' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // eski rasmni o‘chirish (agar kerak bo‘lsa)
            if ($plant->image && Storage::disk('public')->exists($plant->image)) {
                Storage::disk('public')->delete($plant->image);
            }

            $validated['image'] = $request->file('image')->store('plants', 'public');
        }

        $plant->update($validated);

        return redirect()->route('admin.plants.index')->with('success', 'Plant updated successfully.');
    }


    // 🌱 O‘chirish
    public function destroy($id)
    {
        $plant = Plant::findOrFail($id);
        $plant->delete();

        return redirect()->route('admin.plants.index')->with('success', 'O‘simlik o‘chirildi.');
    }
}
