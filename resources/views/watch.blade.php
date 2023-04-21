<x-main-layout>
    <div class="p-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                <div>
                    <video id="my-video" class="video-js" controls preload="auto" style="width: 100%;aspect-ratio:16/9;"
                        poster="{{config('app.url').$video->thumbnail}}" data-setup="{}">
                        <source src="{{config('app.url').$video->link}}" type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>

                    <div class="video__details">
                        <div class="author">
                            <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
                        </div>
                        <div class="title">
                            <a href="/">
                                <h3>FutureCoders</h3>
                            </a>
                            <span>{{$video->views}} Views • {{$video->likes}} Likes • {{$video->dislikes}} Disikes • 1 years Ago</span>
                        </div>
                    </div>
                </div>

                <div class="comments">
                    <form action="{{route('video.comment')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$video->views}}">
                        <textarea style="width: 100%;" name="comment" id="" cols="30" rows="10"></textarea>
                        <div style="display: flex; justify-content:flex-end;">
                            <input class="submit" type="submit" value="Comment">
                        </div>
                    </form>
                    <div class="comment">
                        <div class="author">
                            <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
                        </div>
                        <div class="title">
                            <a href="/">
                                <h3>FutureCoders</h3>
                            </a>
                            <span style="margin-left: 15px;">Such a nice content</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                <h3>Related</h3>
                <div class="related">
                    @foreach ($related as $r)
                    <div class="related-content">
                        <div style="width:50%;"><img src="{{config('app.url').$r->thumbnail}}"
                                alt="" /></div>
                        <div style="width:50%; padding-left: 10px;">
                            <h3 style="margin-left: 0px;">{{$r->title}}</h3>
                            <span>{{$r->desc}}</span> <br>
                            <div style="display: inline; color:white;">
                                <i class="fa-solid fa-thumbs-up"></i> {{$r->likes}}
                                <i class="fa-solid fa-comment"></i>{{$r->dislikes}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        const channels=document.getElementById('channels')
        const url=window.location.href;
        const params=url.split('/');

        axios.get('http://localhost:8000/api/comments/'+params[params.length-1])
            .then(function (response) {
                var data=response.data;
                // window.append(data);
            })
            .catch(function (error) {
                console.log(error);
            });


    </script>
</x-main-layout>

