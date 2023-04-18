<x-account-layout>
    <div class="d-flex justify-content-between flex-row">
        <h1 class="my-4" style="display: block;">My Channels</h1>
        <button type="button" style="all:unset;color:white; cursor: pointer;" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Add New Channel
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Add New Channel</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('channel.create')}}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="channelName" class="col-sm-2 col-form-label text-light">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="channelName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="desc" class="col-sm-2 col-form-label text-light">Description</label>
                                <div class="col-sm-10">
                                    <textarea style="width: 100%;" class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary ms-4">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Subscribers</th>
                <th scope="col">Custom Url</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($channels as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->subscribers}}</td>
                <td>{{$c->slug}}</td>
                <td>
                    <a href="/my-videos">
                        <button class="btn" style="background:transparent;"><i class="fa-solid fa-video"></i></button>
                    </a>
                    <button type="button" class="btn" style="background:transparent;" data-bs-toggle="modal" data-bs-target="#deleteChannel">
                        <i class="fa-solid fa-trash"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="deleteChannel" tabindex="-1" aria-labelledby="deleteChannelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-light" id="deleteChannelLabel">Are you sure?</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p class="text-light">Are you sure to delete this channel and all its contents?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <form action="{{route('channel.delete')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$c->id}}" name="id">
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
</x-account-layout>
