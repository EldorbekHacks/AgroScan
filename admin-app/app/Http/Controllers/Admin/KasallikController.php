<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kasallik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KasallikController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:kasallik list', ['only' => ['index', 'show']]);
        $this->middleware('can:kasallik create', ['only' => ['create', 'store']]);
        $this->middleware('can:kasallik edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:kasallik delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $kasalliks = Kasallik::query();

        if (request('search')) {
            $kasalliks->where('name', 'like', '%'.request('search').'%');
        }

        if ($sort = request('sort')) {
            $direction = str_starts_with($sort, '-') ? 'DESC' : 'ASC';
            $attribute = ltrim($sort, '-');
            $kasalliks->orderBy($attribute, $direction);
        } else {
            $kasalliks->latest();
        }

        $kasalliks = $kasalliks->paginate(config('admin.paginate.per_page'))
            ->onEachSide(config('admin.paginate.each_side'));

        return view('admin.kasallik.index', compact('kasalliks'));
    }

    public function create()
    {
        return view('admin.kasallik.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'nullable|string|max:255',
            'havf' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('kasallik/covers', 'public');
        }

        Kasallik::create($data);

        return redirect()->route('admin.kasallik.index')->with('success', 'Kasallik created');
    }

    public function edit(Kasallik $kasallik)
    {
        return view('admin.kasallik.edit', compact('kasallik'));
    }

    public function update(Request $request, Kasallik $kasallik)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'nullable|string|max:255',
            'havf' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            Storage::disk('public')->delete($kasallik->cover);
            $data['cover'] = $request->file('cover')->store('kasallik/covers', 'public');
        }

        $kasallik->update($data);

        return redirect()->route('admin.kasallik.index')->with('success', 'Kasallik updated');
    }

    public function destroy(Kasallik $kasallik)
    {
        Storage::disk('public')->delete($kasallik->cover);
        $kasallik->delete();

        return redirect()->back()->with('success', 'Kasallik deleted');
    }
}
