@extends('admin.layouts.app')

@section('title', 'Edit Gallery')

@section('row')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Gallery Edit</h2>

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

                        <form enctype="multipart/form-data" id="blog_edit_form"
                            action="{{ route('gallery.update', ['id' => $gallery->id]) }}" method="POST" class="mt-2">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-title">Title</label>
                                        <input name="title" type="text" id="blog-edit-title" class="form-control"
                                            value="{{ $gallery->title }}" />
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-status">View Status</label>
                                        <select name="status" class="form-control" id="blog-edit-status">
                                            <option {{ $gallery->status == 1 ? 'selected' : '' }} value="1">Published
                                            </option>
                                            <option {{ $gallery->status == 0 ? 'selected' : '' }} value="0">Draft
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <style>
                                        .middle {
                                            transition: .5s ease;
                                            opacity: 0;
                                            position: absolute;
                                            transform: translate(-50%, -50%);
                                            -ms-transform: translate(-50%, -50%);
                                            text-align: center;
                                        }

                                        .containers:hover .rounded {
                                            opacity: 0.3;
                                        }

                                        .containers:hover .middle {
                                            opacity: 1;
                                        }
                                    </style>
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Gallery Image/Images Or Video/Videos</h4>
                                        <div class="media flex-column flex-md-row flex-wrap" style="margin-bottom: 20px">

                                            @if ($gallery->photos)

                                                @foreach (json_decode($gallery->photos) as $item)
                                                    <div class="containers" style="position: relative; ">

                                                        {{-- {{ $file_ext = strtoupper(substr($item, -3)) }} --}}
                                                        <?php $file_ext = strtoupper(substr($item, -3)) ?>


                                                        @if ($file_ext == 'PEG' or $file_ext == 'JPG' or $file_ext == 'PNG' or $file_ext == 'GIF')
                                                            <img style="display:block;"
                                                                src="{{ asset('images') }}/{{ $item }}"
                                                                class="rounded mr-2 mb-1 mb-md-0" width="170"
                                                                height="110" alt="Blog Featured Image" />
                                                        @else
                                                            <video style="display:block;" width="320" height="240"
                                                                controls>
                                                                <source src="{{ asset('images') }}/{{ $item }}"
                                                                    type="video/mp4">
                                                            </video>
                                                        @endif
                                                        <div class="middle"></div>

                                                        <svg class="photos-remove"
                                                            style="position: absolute;top:0;right: 11px;background: #fff;border-radius: 50%;"
                                                            xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18" />
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18" />
                                                        </svg>

                                                        <input type="hidden" name="old_photos[]"
                                                            value="{{ $item }}">
                                                    </div>
                                                @endforeach

                                            @endif
                                        </div>

                                        <div class="media-body">
                                            <h5 class="mb-0">Select one or multiple image/video:</h5>

                                            <small class="text-muted">Ideal resolution 800x400.</small>
                                            <p class="my-50">
                                                {{-- <a href="javascript:void(0);" id="blog-image-text"></a> --}}
                                            </p>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" name="photos[]" class="custom-file-input"
                                                            id="blogCustomFile" accept="video/*,image/*" multiple />
                                                        <label class="custom-file-label" for="blogCustomFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-50">
                                <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                <a href="{{ route('galleries') }}" type="reset"
                                    class="btn btn-outline-secondary">Cancel</a>
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

        $(".photos-remove").click(function() {
            $(this).parent().remove();
        });
    </script>
@endpush
