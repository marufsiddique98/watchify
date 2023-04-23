<x-account-layout>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
      var video = document.getElementById("vid");
      var mediaDevices = navigator.mediaDevices;
      vid.muted = true;
      mediaDevices
          .getUserMedia({
            video: true,
            audio: true,
          })
          .then((stream) => {

            // Changing the source of video to current stream.
            video.srcObject = stream;
            video.addEventListener("loadedmetadata", () => {
              video.play();
            });
          })
          .catch(alert);
    });
    </script>
    <div class="d-flex justify-content-between flex-row">
        <h1 class="my-4" style="display: block;">My Contents</h1>
        <div>
            <button type="button" style="all:unset;color:white; cursor: pointer; margin-right:20px;"
                data-bs-toggle="modal" data-bs-target="#liveModal">
                Go Live
            </button>

            <!-- Modal -->
            <div class="modal fade" id="liveModal" tabindex="-1" aria-labelledby="liveModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-light" id="liveModalLabel">Upload Video</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('video.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="channelName" class="text-light col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input required name="title" type="text" class="form-control"
                                            id="channelName">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="desc" class="text-light col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea required style="width: 100%;" class="form-control" name="desc" id="desc" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="channel" class="text-light col-sm-2 col-form-label">Channel</label>
                                    <div class="col-sm-10">
                                        <select required class="form-control" name="channel" id="channel">
                                            <option value="0" disabled>Channel</option>
                                            @foreach ($channels as $channel)
                                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div style="width: 100%;
                                height: 400px;
                                border: 2px solid black;
                                position: relative;">
                                    <video style="width: 100%;
                                    height: 400px;
                                    object-fit: cover;" id="vid"></video>
                                </div>

                                <div class="d-flex flex-row justify-content-end mt-4">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button disabled type="submit" class="btn btn-primary ms-4">Upcoming</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <button type="button" style="all:unset;color:white; cursor: pointer;" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Upload New Video
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Upload Video</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('video.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="channelName" class="text-light col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input required name="title" type="text" class="form-control"
                                            id="channelName">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="desc"
                                        class="text-light col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea required style="width: 100%;" class="form-control" name="desc" id="desc" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="channel" class="text-light col-sm-2 col-form-label">Channel</label>
                                    <div class="col-sm-10">
                                        <select required class="form-control" name="channel_id" id="channel">
                                            <option value="0" disabled>Channel</option>
                                            @foreach ($channels as $channel)
                                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="thumb" class="text-light col-sm-2 col-form-label">Thumbnail</label>
                                    <div class="col-sm-10">
                                        <input required type="file" accept="image/*" class="form-control"
                                            id="thumb" name="thumb">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="thumb" class="text-light col-sm-2 col-form-label">Video</label>
                                    <div class="col-sm-10">
                                        <input required type="file" accept="video/*" class="form-control"
                                            id="video" name="video">
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-end">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary ms-4">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Likes</th>
                <th scope="col">Disikes</th>
                <th scope="col">View</th>
                {{-- <th scope="col">Comments</th> --}}
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr>
                    <th>{{ $video->title }}</th>
                    <th>
                        <img style="width: 200px; aspect-ratio:10/6;" src="{{config('app.url') . $video->thumbnail }}" alt="">
                    </th>
                    <th>{{ $video->likes }}</th>
                    <th>{{ $video->dislikes }}</th>
                    <th>{{ $video->views }}</th>
                    {{-- <th>{{500}}</th> --}}
                    <td>
                        <button type="button" class="btn" style="background:transparent;" data-bs-toggle="modal"
                            data-bs-target="#deleteChannel">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteChannel" tabindex="-1"
                            aria-labelledby="deleteChannelLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-dark" id="deleteChannelLabel">Are you sure?
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-dark">Are you sure to delete this video?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('video.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $video->slug }}" name="id">
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // const channels=document.getElementById('channels')
        // axios.get('/api/channels')
        //     .then(function (response) {
        //         // var data=response.data;
        //         // window.append(data);
        //         // console.log(response);
        //     })
        //     .catch(function (error) {
        //         // handle error
        //         console.log(error);
        //     });
        console.log(AgoraRTC.createClient);
    </script>
</x-account-layout>
