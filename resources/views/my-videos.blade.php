<x-account-layout>
    <div class="d-flex justify-content-between flex-row">
        <h1 class="my-4" style="display: block;">My Contents</h1>
        <button type="button" style="all:unset;color:white; cursor: pointer;" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Upload New Video
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Upload Video</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3 row">
                                <label for="channelName" class="text-light col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="channelName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="desc" class="text-light col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea style="width: 100%;" class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="thumb" class="col-sm-2 col-form-label">Thumbnail</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="thumb">
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
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Likes</th>
                <th scope="col">Disikes</th>
                <th scope="col">View</th>
                <th scope="col">Comments</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Video Title</th>
                <th>
                    <img style="width: 200px; aspect-ratio:10/6;" src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" alt="">
                </th>
                <th>200</th>
                <th>300</th>
                <th>400</th>
                <th>500</th>
                <td>
                    <button type="button" class="btn" style="background:transparent;" data-bs-toggle="modal" data-bs-target="#deleteChannel">
                        <i class="fa-solid fa-trash"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="deleteChannel" tabindex="-1" aria-labelledby="deleteChannelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-dark" id="deleteChannelLabel">Are you sure?</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p class="text-dark">Are you sure to delete this video?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
            </tr>
        </tbody>
    </table>
</x-account-layout>
