<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chatbot;
use Illuminate\Support\Facades\Storage;

class ChatbotController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:chatbot list', ['only' => ['index', 'show']]);
        $this->middleware('can:chatbot create', ['only' => ['create', 'store']]);
        $this->middleware('can:chatbot edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:chatbot delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $chatbots = Chatbot::query();

        if (request('search')) {
            $chatbots->where('user_name', 'like', '%'.request('search').'%');
        }

        if ($sort = request('sort')) {
            $direction = str_starts_with($sort, '-') ? 'DESC' : 'ASC';
            $attribute = ltrim($sort, '-');
            $chatbots->orderBy($attribute, $direction);
        } else {
            $chatbots->latest();
        }

        $chatbots = $chatbots->paginate(config('admin.paginate.per_page'))
            ->onEachSide(config('admin.paginate.each_side'));

        return view('admin.chatbot.index', compact('chatbots'));
    }

    public function destroy(Chatbot $chatbot)
    {
        Storage::disk('public')->delete($chatbot->photo);
        $chatbot->delete();

        return redirect()->back()->with('success', 'Xabar ochirildi');
    }
}
