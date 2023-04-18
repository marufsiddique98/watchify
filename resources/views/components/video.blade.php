<div class="video">
    <a href="{{$link}}">
        <div style="border-radius:10px;" class="video__thumbnail">
            <img style="border-radius:10px;" src="{{ $thumbnail }}" alt="" />
        </div>
    </a>
    <div class="video__details">
        <div class="author">
            <img src="{{ $channelThumbnail }}" alt="" />
        </div>
        <div class="title">
            <a href="{{$link}}">
                <h3>
                    {{ $title }}
                </h3>
            </a>
            <a href="{{$channelLink}}">{{ $channelName }}</a>
            <span>{{$views}} Views • {{ $time }} Ago</span>
        </div>
    </div>
</div>
