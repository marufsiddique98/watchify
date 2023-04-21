<x-main-layout>
    <div class="px-5">
        <div class="row">
            <div class="col-12 col-md-8">
                {{$slot}}

            </div>
            <div class="col-12 col-md-4">
                <ul class="account-menu">
                    <li>
                        <a href="/profile">My Profile</a>
                    </li>
                    <li>
                        <a href="{{route('channel.all')}}">My Channels</a>
                    </li>
                    <li>
                        <a href="{{route('video.all')}}">My Contents</a>
                    </li>
                    <li>
                        <a method="delete" href="/logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-main-layout>
