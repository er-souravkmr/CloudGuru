@extends('admin.layouts.app')

@section('title','Create Course')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Course Create</h2>

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

               
                    <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('course.store') }}" method="POST" class="mt-2">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-title">Course Name</label>
                                    <input name="title" type="text" id="blog-edit-title" class="form-control" required />
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

                            <div class="col-12 mt-50">
                                <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                <a href="{{route('course')}}" type="reset" class="btn btn-outline-secondary">Cancel</a>
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