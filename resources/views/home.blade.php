<x-home-layout>
    <div class="sidebar__categories">
        <h3>Featured Channels</h3>
        @foreach ($channels as $c)
          <div class="sidebar__category">
              {{-- <i class="material-icons">library_add_check</i> --}}
              <a href="{{route('channel',$c->slug)}}"><span>{{$c->name}}</span></a>

          </div>
        @endforeach


    </div>
    <hr />
  </div>
  <!-- Sidebar Ends -->

  <!-- Videos Section -->
  <div class="videos">
    {{-- <h1>Recommended</h1> --}}
    <div class="videos__container">

        @foreach ($videos as $video)
        <div class="video">
            <a href="{{route('video.watch',$video->vslug)}}">
                <div style="border-radius:10px;" class="video__thumbnail">
                    <img style="border-radius:10px;" src="{{config('app.url').$video->vthumb}}" alt="Video thumbnail" />
                </div>
            </a>
            <div class="video__details">
                <div class="author">
                    <img src="" alt="" />
                </div>
                <div class="title">
                    <a href="{{route('video.watch',$video->vslug)}}">
                        <h3>
                            {{ $video->vtitle }}
                        </h3>
                    </a>
                    <a href="{{route('channel',$video->cslug)}}">{{ $video->channel_name }}</a>
                    <span>{{$video->views}} Views •  Ago</span>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($videos as $video)
        <div class="video">
            <a href="{{route('video.watch',$video->vslug)}}">
                <div style="border-radius:10px;" class="video__thumbnail">
                    <img style="border-radius:10px;" src="{{config('app.url').$video->vthumb}}" alt="Video thumbnail" />
                </div>
            </a>
            <div class="video__details">
                <div class="author">
                    <img src="" alt="" />
                </div>
                <div class="title">
                    <a href="{{route('video.watch',$video->vslug)}}">
                        <h3>
                            {{ $video->vtitle }}
                        </h3>
                    </a>
                    <a href="{{route('channel',$video->cslug)}}">{{ $video->channel_name }}</a>
                    <span>{{$video->views}} Views •  Ago</span>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($videos as $video)
        <div class="video">
            <a href="{{route('video.watch',$video->vslug)}}">
                <div style="border-radius:10px;" class="video__thumbnail">
                    <img style="border-radius:10px;" src="{{config('app.url').$video->vthumb}}" alt="Video thumbnail" />
                </div>
            </a>
            <div class="video__details">
                <div class="author">
                    <img src="" alt="" />
                </div>
                <div class="title">
                    <a href="{{route('video.watch',$video->vslug)}}">
                        <h3>
                            {{ $video->vtitle }}
                        </h3>
                    </a>
                    <a href="{{route('channel',$video->cslug)}}">{{ $video->channel_name }}</a>
                    <span>{{$video->views}} Views •  Ago</span>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($videos as $video)
        <div class="video">
            <a href="{{route('video.watch',$video->vslug)}}">
                <div style="border-radius:10px;" class="video__thumbnail">
                    <img style="border-radius:10px;" src="{{config('app.url').$video->vthumb}}" alt="Video thumbnail" />
                </div>
            </a>
            <div class="video__details">
                <div class="author">
                    <img src="" alt="" />
                </div>
                <div class="title">
                    <a href="{{route('video.watch',$video->vslug)}}">
                        <h3>
                            {{ $video->vtitle }}
                        </h3>
                    </a>
                    <a href="{{route('channel',$video->cslug)}}">{{ $video->channel_name }}</a>
                    <span>{{$video->views}} Views •  Ago</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</x-home-layout>
