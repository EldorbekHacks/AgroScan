<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('profile.pages.videos.index', compact('videos'));
    }
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('profile.pages.videos.show', compact('video'));
    }
}
