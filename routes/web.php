<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Models\Channel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $videos= DB::table('videos')
    ->join('channels', 'videos.channel_id', '=', 'channels.id')
    ->select(
        'channels.name as channel_name',
        'videos.views as views',
        'videos.slug as vslug',
        'channels.slug as cslug',
        'videos.thumbnail as vthumb',
        'videos.title as vtitle'
        )
    ->get();
    $channels=Channel::all();
    return view('home',[
        'videos'=>$videos,
        'channels'=>$channels,
    ]);
    // return json_encode($videos);
})->name('home');
Route::get('/channel/{slug}', function ($slug) {
    $videos= DB::table('videos')
    ->join('channels', 'videos.channel_id', '=', 'channels.id')
    ->select(
        'channels.name as channel_name',
        'videos.views as views',
        'videos.slug as vslug',
        'channels.slug as cslug',
        'videos.thumbnail as vthumb',
        'videos.title as vtitle'
        )->where('channels.slug',$slug)
    ->get();

    $channels=Channel::all();
    return view('home',[
        'videos'=>$videos,
        'channels'=>$channels,
    ]);
    // return json_encode($videos);
})->name('channel');

// Route::get('/watch/:slug', function () {
//     return view('watch');
// })->name('watch');
Route::get('/watch/{slug}', [VideoController::class,'watch'])->name('video.watch');

Route::get('/my-profile', function () {
    return view('profile');
})->name('my.profile')->middleware(['auth', 'verified']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'channels'], function(){
    Route::get('/', [ChannelController::class,'channels'])->name('channel.all');
    Route::post('/create', [ChannelController::class,'create'])->name('channel.create');
    Route::post('/delete', [ChannelController::class,'delete'])->name('channel.delete');
})->middleware(['auth', 'verified']);

Route::group(['prefix'=>'videos'], function(){
    Route::get('/all', [VideoController::class,'videos'])->name('video.all');
    Route::post('/create', [VideoController::class,'create'])->name('video.create');
    Route::post('/comment', [CommentController::class,'comment'])->name('video.comment');
    Route::post('/delete', [VideoController::class,'delete'])->name('video.delete');
})->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
