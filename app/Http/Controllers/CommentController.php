<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comments(Request $request,$slug){
        echo $slug;
        $v= Video::where('slug',$slug)->first();
        return Comment::where('video_id',$v->id)->get();
    }
    public function comment(Request $request):RedirectResponse{
        Comment::create([
            'comment'=>$request->comment,
            'user_id'=>Auth::id(),
            'video_id'=>$request->id,
            'likes'=>0,
            'dislikes'=>0,
        ]);
        return back();
    }
}
