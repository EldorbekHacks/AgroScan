<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatbot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChatbotController extends Controller
{
    public function saveChat(Request $request)
    {
        $user = Auth::user();
        $photoPath = null;

        // Agar rasm yuborilgan bo'lsa, uni diskka saqlash
        if ($request->input('photo')) {
            $base64Image = $request->input('photo');
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
            $fileName = 'chatbot_' . time() . '.jpg';
            Storage::disk('public')->put('chatbot_photos/' . $fileName, $imageData);
            $photoPath = 'chatbot_photos/' . $fileName;
        }

        $chat = new Chatbot();
        $chat->user_id = $user->id;
        $chat->user_name = $user->name;
        $chat->user_message = $request->input('user_message');
        $chat->bot_message = $request->input('bot_message');
        $chat->photo = $photoPath;
        $chat->save();

        return response()->json(['success' => true]);
    }
}
