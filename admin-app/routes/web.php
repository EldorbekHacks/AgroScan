<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\KasallikController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('check', [ProfileController::class, 'check'])
        ->name('check');
    Route::get('video', [VideoController::class, 'index'])
        ->name('video');
    Route::get('plant', [PlantController::class, 'index'])
        ->name('plant');
    Route::get('taqvim', [ProfileController::class, 'taqvim'])
        ->name('taqvim');
    Route::get('kasallik', [KasallikController::class, 'index'])
        ->name('kasallik');
    Route::post('chatbot/save', [ChatbotController::class, 'saveChat'])
        ->name('chatbotSave');
    });

require __DIR__.'/auth.php';
