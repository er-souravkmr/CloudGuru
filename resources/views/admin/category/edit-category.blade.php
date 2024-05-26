<div class="modal fade text-left" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form enctype="multipart/form-data" action="{{ route('category.update') }}" method="POST"
                    class="mt-2">
                    @csrf
                    <input type="hidden" name="id" id="vendor_id">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="name">Name</label>
                                <input name="name" type="text" id="name" class="form-control" required class="@error('name') is-invalid @enderror"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status" required />
                                    <option value="1">Active</option>
                                    <option value="2">InActive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="name">Existing Image</label>
                                <img id="image" style="width: 50; height:50px;" class="d-block me-2 lozad" src="{{asset('images/categories/')}}" data-loaded="true">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="name">Image</label>
                                <input type="file" class="form-control" name="cat-image" />
                            </div>
                        </div>

                        <div class="col-12 mt-50">
                            <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
