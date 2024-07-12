@extends('admin.layouts.app')

@section('title','Subcourse Create')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Subcourse Create</h2>

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

               
                    <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('subcourse.store') }}" method="POST" class="mt-2">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-title">Subcourse Name</label>
                                    <input name="name" type="text" id="blog-edit-title" class="form-control" required />
                                    <span class="text-danger"> 
                                            @error('name')
                                               {{$message}}
                                            @enderror
                                    </span>
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
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="image">Image</label>
                                    <input type="file" id="image"  accept="image/png, image/gif, image/jpeg" class="form-control" name="course_image" required />
                                </div>
                                <span class="text-danger"> 
                                        @error('course_image')
                                        {{$message}}
                                        @enderror
                                </span>
                            </div>

                            
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="course_id">Course</label>
                                    <select class="select2 form-control-lg select2-hidden-accessible" id="course_id" name="course_id">
                                        <option value="">Select Course</option>
                                        @foreach ($data as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->courses }}</option>
                                        @endforeach

                                    </select>
                                    <span class="text-danger"> 
                                        @error('course_id')
                                           {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="course_desc">Description</label>
                                    <textarea data-length="200" class="form-control char-textarea" id="course_desc" rows="3" placeholder="Description" name="description"> </textarea>
                                    <span class="text-danger"> 
                                        @error('description')
                                           {{$message}}
                                        @enderror
                                </span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="course_sub_desc">Sub Description</label>
                                    <textarea data-length="200" class="form-control char-textarea" id="course_sub_desc" rows="3" placeholder="Description" name="sub_description"> </textarea>
                                    <span class="text-danger"> 
                                        @error('sub_description')
                                           {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            
                            <div class="col-12 mt-50">
                                <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                <a href="{{route('subcourse')}}" type="reset" class="btn btn-outline-secondary">Cancel</a>
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
    $("#course_desc").on("submit", function() {
        $("#hiddenArea").val(blogEditor.root.innerHTML);
    });

    $("#course_sub_desc").on("submit", function() {
        $("#hiddenArea").val(blogEditor.root.innerHTML);
    });
</script>
@endpush