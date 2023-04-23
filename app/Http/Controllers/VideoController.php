<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideoController extends Controller
{

    public function videos(Request $request):View{
        $videos=Video::where('user_id',Auth::id())->get();
        $channels=Channel::where('user_id',Auth::id())->get();
        return view('my-videos',[
            'videos'=>$videos,
            'channels'=>$channels
        ]);
    }

    public function watch(Request $request,$slug){
        $videos=Video::where('slug',$slug)->first();
        $cid=$videos->id;
        $related=Video::inRandomOrder()->where('channel_id',$cid)->limit(5)->get();
        return view('watch',[
            'video'=>$videos,
            'related'=>$related,
        ]);
    }

    public function create(Request $request):RedirectResponse{
        $channel=$request->channel_id;
        // $file=$request->file('video');
        // $file->move('videos',$file->getClientOriginalName());
        $image='';
        $video='';
        $file =$request->file('thumb');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('thumbs/'.$channel.'/'), $filename);
            $image= 'thumbs/'.$channel.'/'.$filename;


        $file =$request->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('videos/'.$channel.'/'), $filename);
            $video= 'videos/'.$channel.'/'.$filename;


        $slug = Str::slug($request->title, '-');

        $uniqueSlug = $slug;
        $i = 1;
        while (Channel::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $i++;
        }


        Video::create([
            'title'=>$request->title,
            'slug'=>$slug,
            'desc'=>$request->desc,
            'channel_id'=>$channel,
            'user_id'=>Auth::id(),
            'thumbnail'=>$image,
            'thumbnail-path'=>'public/'.$image,
            'link'=>$video,
            'link-path'=>'public/'.$video,
            'likes'=>0,
            'dislikes'=>0,
            'views'=>0,
        ]);
        return back();
    }
    public function delete(Request $request): RedirectResponse
    {
        Video::where('slug',$request->id)->delete();
        return back()->with('status', 'Video Deleted Successfully');
    }

}
