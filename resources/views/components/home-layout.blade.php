<x-main-layout>
    <div class="mainBody">
        <!-- Sidebar Starts -->
        <div class="sidebar">
          <div class="sidebar__categories">
            <div class="sidebar__category">
              <i class="material-icons">home</i>
              <a href="/"><span>Home</span></a>
            </div>
            <div class="sidebar__category">
              <i class="material-icons">local_fire_department</i>
              <a href="/"><span>Trending</span></a>
            </div>
            {{-- <div class="sidebar__category">
              <i class="material-icons">subscriptions</i>
              <span>Subcriptions</span>
            </div> --}}
            {{-- <div class="sidebar__category">
              <i class="material-icons">history</i>
              <span>History</span>
            </div> --}}
            <div class="sidebar__category">
              <i class="material-icons">play_arrow</i>
              <a href="{{route('video.all')}}"><span>Your Videos</span></a>
            </div>
            {{-- <div class="sidebar__category">
              <i class="material-icons">watch_later</i>
              <span>Watch Later</span>
            </div>
            <div class="sidebar__category">
              <i class="material-icons">thumb_up</i>
              <span>Liked Videos</span>
            </div> --}}
          </div>
          <hr />


          {{$slot}}
        </div>
      </div>
</x-main-layout>
