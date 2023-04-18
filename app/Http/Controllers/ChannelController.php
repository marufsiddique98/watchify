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
    public function create(Request $request): RedirectResponse
    {
        $slug = Str::slug($request->name, '-');

        $uniqueSlug = $slug;
        $i = 1;
        while (Channel::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $i++;
        }

        Channel::create([
            'name'=>$request->name,
            'slug'=>$uniqueSlug,
            'desc'=>$request->desc,
            'subscribers'=>0,
            'user_id'=>Auth::id(),
        ]);
        return back()->with('status', 'Channel Created Successfully');
    }
    public function channels(Request $request):View{
        return view('my-channels',['channels'=>Channel::where('user_id',Auth::id())->get()]);
    }
    public function delete(Request $request): RedirectResponse
    {
        Video::where('channel_id',$request->id)->delete();
        Channel::find($request->id)->delete();
        return back()->with('status', 'Channel Deleted Successfully');
    }
}
