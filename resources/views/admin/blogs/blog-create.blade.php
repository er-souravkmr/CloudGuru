@extends('admin.layouts.app')

@section('title','Create Blogs')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Blog Create</h2>

        </div>
    </div>
</div>
@endsection

@section('content')


<div class="blog-edit-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

               
                    <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('blog.store') }}" method="POST" class="mt-2">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-title">Title</label>
                                    <input name="title" type="text" id="blog-edit-title" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-category">Description</label>
                                    <textarea data-length="200" class="form-control char-textarea" id="blog-edit-category" rows="3" placeholder="Description" name="description"> </textarea>
                                </div>
                            </div>
                        
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-status">Status</label>
                                    <select name="status" class="form-control" id="blog-edit-status">
                                        <option value="1">Published</option>
                                        <option selected value="0">Draft</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-group mb-2">
                                    <label>Content</label>
                                    <div id="blog-editor-wrapper">
                                        <div id="blog-editor-container">
                                            <div class="editor">

                                            </div>
                                            <textarea name="blog" style="display:none" id="hiddenArea"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="border rounded p-2">
                                    <h4 class="mb-1">Featured Image</h4>
                                    <div class="media flex-column flex-md-row">
                                        <img src="" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                        <div class="media-body">
                                            <h5 class="mb-0">Main image:</h5>
                                            <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                            <p class="my-50">
                                                {{-- <a href="javascript:void(0);" id="blog-image-text"></a> --}}
                                            </p>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         

                            <div class="col-12 mt-50">
                                <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                <a href="{{route('blogs')}}" type="reset" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script>
    $("#blog_edit_form").on("submit", function() {
        $("#hiddenArea").val(blogEditor.root.innerHTML);
    });
</script>
@endpush