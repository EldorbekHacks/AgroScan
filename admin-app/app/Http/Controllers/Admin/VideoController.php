<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:video list', ['only' => ['index', 'show']]);
        $this->middleware('can:video create', ['only' => ['create', 'store']]);
        $this->middleware('can:video edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:video delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $videos = Video::query();

        if (request('search')) {
            $videos->where('name', 'like', '%'.request('search').'%');
        }

        if ($sort = request('sort')) {
            $direction = str_starts_with($sort, '-') ? 'DESC' : 'ASC';
            $attribute = ltrim($sort, '-');
            $videos->orderBy($attribute, $direction);
        } else {
            $videos->latest();
        }

        $videos = $videos->paginate(config('admin.paginate.per_page'))
            ->onEachSide(config('admin.paginate.each_side'));

        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'file' => 'required|file|mimetypes:video/*',
            'cover' => 'nullable|image',
        ]);

        $data['file'] = $request->file('file')->store('videos', 'public');

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('videos/covers', 'public');
        }

        Video::create($data);

        return redirect()->route('admin.video.index')->with('success', 'Video created successfully');
    }

    public function edit(Video $video)
    {
        return view('admin.video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimetypes:video/*',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($video->file);
            $data['file'] = $request->file('file')->store('videos', 'public');
        }

        if ($request->hasFile('cover')) {
            Storage::disk('public')->delete($video->cover);
            $data['cover'] = $request->file('cover')->store('videos/covers', 'public');
        }

        $video->update($data);

        return redirect()->route('admin.video.index')->with('success', 'Video updated successfully');
    }

    public function destroy(Video $video)
    {
        Storage::disk('public')->delete([$video->file, $video->cover]);
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted');
    }
}
