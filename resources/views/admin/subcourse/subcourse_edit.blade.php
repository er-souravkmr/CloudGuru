@extends('admin.layouts.app')

@section('title','Subcourse Edit')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Subcourse Edit</h2>

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


                    <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('subcourse.update') }}" method="POST" class="mt-2">
                        @csrf
               
                        <div class="row">
                            <input type="hidden" name="id" value="{{$course->id}}" >
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="blog-edit-title">Subcourse</label>
                                    <input name="name" type="text" value="{{$course->course}}" id="blog-edit-title" class="form-control" required />
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
                                        <option {{$course->status == 1 ? "selected" : ""}} value="1">Published</option>
                                        <option {{$course->status == 0? "selected" : ""}} value="0">Draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="name">Existing Image</label>
                                    <img id="image" style="width: 50; height:50px;" class="d-block me-2 lozad" src="{{asset('public/uploads/subcourse')}}/{{ $course->image }}" data-loaded="true">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-2">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" value="{{$course->image}}"  accept="image/png, image/gif, image/jpeg" class="form-control" name="course_image"  />
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
                                            <option {{$course->course_id == $cate->id ? "selected" : ""}} value="{{ $cate->id }}">{{ $cate->courses }}</option>
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
                                    <textarea data-length="200" class="form-control char-textarea" id="course_desc" rows="3" placeholder="Description" name="description">value="{{$course->description}}"</textarea>
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
                                    <textarea data-length="200" class="form-control char-textarea" id="course_sub_desc" rows="3" placeholder="Description" name="sub_description"> value="{{$course->subdesc}}" </textarea>
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
    $("#blog_edit_form").on("submit", function() {
        $("#hiddenArea").val(blogEditor.root.innerHTML);
    });
</script>
@endpush