<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web3AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/eth/signature', [Web3AuthController::class, 'signature'])->name('metamask.signature');
Route::post('/eth/authenticate', [Web3AuthController::class, 'authenticate'])->name('metamask.authenticate');

Route::get('/watch', function () {
    return view('watch');
})->name('watch');

Route::get('/my-profile', function () {
    return view('profile');
})->name('my.profile')->middleware(['auth', 'verified']);

Route::get('/my-channels', function () {
    return view('my-channels');
})->name('my.channels')->middleware(['auth', 'verified']);

Route::get('/my-videos', function () {
    return view('my-videos');
})->name('my.videos')->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'channels'], function(){
    Route::get('/', [ChannelController::class,'channels'])->name('channel.all');
    Route::post('/create', [ChannelController::class,'create'])->name('channel.create');
    Route::post('/delete', [ChannelController::class,'delete'])->name('channel.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
