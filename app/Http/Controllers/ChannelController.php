<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ChannelController extends Controller
{

    public function channels(Request $request):View{
        return view('my-channels',['channels'=>Channel::where('user_id',Auth::id())->get()]);
    }

    // public function channelsapi(Request $request){
    //     $channels=Channel::where('user_id',Auth::id())->get();
    //     return $channels;
    // }

    public function create(Request $request): RedirectResponse
    {
        $slug = Str::slug($request->name, '-');

        $uniqueSlug = $slug;
        $i = 1;
        while (Channel::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $i++;
        }
        if (!empty($request->image)) {
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('images/'), $filename);
            $image= 'images/'.$filename;

            Channel::create([
                'name'=>$request->name,
                'image'=>$image,
                'image_path'=>'public/'. $image,
                'slug'=>$uniqueSlug,
                'desc'=>$request->desc,
                'subscribers'=>0,
                'user_id'=>Auth::id(),
            ]);
            return back()->with('status', 'Channel Created Successfully');
        }

        return back()->with('status', 'Channel Cannot be Created');
    }

    public function delete(Request $request): RedirectResponse
    {
        Video::where('channel_id',$request->id)->delete();
        Channel::find($request->id)->delete();
        return back()->with('status', 'Channel Deleted Successfully');
    }

}
