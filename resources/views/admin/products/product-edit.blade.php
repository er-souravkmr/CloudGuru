@extends('admin.layouts.app')

@section('title', 'Edit Blogs')

@section('row')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Product Edit</h2>

            </div>
        </div>
    </div>
@endsection

@push('css')
<style>
   .select2-container--default .select2-selection--single .select2-selection__arrow b {

    border-style: none;
    border-width: none;
    height: -6px!important;
    left: -23%!important;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}
</style>
@endpush

@section('content')

    <div class="blog-edit-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form enctype="multipart/form-data" id="blog_edit_form"
                            action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" class="mt-2">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-title">Title</label>
                                        <input name="title" type="text" id="blog-edit-title" class="form-control"
                                            value="{{ $product->title }}" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-status">View Status</label>
                                        <select name="status" class="form-control" id="blog-edit-status">
                                            <option {{ $product->status == 1 ? 'selected' : '' }} value="1">Published
                                            </option>
                                            <option {{ $product->status == 0 ? 'selected' : '' }} value="0">Draft
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="details">Project Details</label>
                                        <div class="col-md-12 col-12 d-flex">
                                            <div class="col-md-5" style="padding: 0px!important">
                                                <label for="details">Key</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="details">Value</label>
                                            </div>

                                        </div>
                                        <div class="field_wrapper">
                                            @php
                                                $i = 1;
                                            @endphp

                                            @foreach (json_decode($product->details, true) as $item => $value)
                                                <div class="row product-row">
                                                    <div class="col-md-12 col-12 d-flex">
                                                        <div class="col-md-5" style="padding: 0px!important">
                                                            <input type="text" name="details[{{ $i }}][key]"
                                                                value="{{ $item }}" required class="form-control">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <input type="text" name="details[{{ $i }}][value]"
                                                                value="{{ $value }}" class="form-control">
                                                        </div>
                                                        @if ($i == 1)
                                                            <a href="javascript:;" class="add_button add-more ">+</a>
                                                        @else
                                                            <a href="javascript:;" class="remove-more remove_button">-</a>
                                                        @endif
                                                        <span class="d-none">{{ $i++ }}</span>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Category</label>
                                        <select name="category"
                                            class="select2 form-control form-control-lg select2-hidden-accessible"
                                            id="category" required>
                                            <option value=""></option>

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $product->category ? 'selected' : '' }}>
                                                    {{ ucfirst($category->title) }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label>Features</label>
                                        <div id="blog-editor-wrapper">
                                            <div id="blog-editor-container">
                                                <div class="editor">
                                                    {!! $product->features !!}
                                                </div>
                                                <textarea name="features" style="display:none" id="hiddenArea"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Technical Specifications</label>
                                        <textarea class="form-control" id="specs" placeholder="Enter the Description" name="specification">{!! $product->specification !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Accessories</label>
                                        <textarea class="form-control" id="accessories" name="accessories">{!! $product->accessories !!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-2">

                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Featured Image</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="{{ asset('images') }}/{{ $product->image }}" id="blog-feature-image"
                                                class="rounded mr-2 mb-1 mb-md-0" width="170" height="110"
                                                alt="Blog Featured Image" />
                                            <div class="media-body">
                                                <h5 class="mb-0">Main image:</h5>
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    <a href="javascript:void(0);"
                                                        id="blog-image-text">{{ $product->image }}</a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input type="file" name="image"
                                                                class="custom-file-input" id="blogCustomFile"
                                                                accept="image/*" />
                                                            <label class="custom-file-label" for="blogCustomFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <h4 class="mb-1">Additional Image/Images</h4>
                                        <div class="media flex-column flex-md-row flex-wrap" style="margin-bottom: 20px">

                                            @if ($product->photos)

                                                @foreach (json_decode($product->photos) as $item)
                                                    <div class="containers" style="position: relative; max-width:180px;">
                                                        <img style="display:block;"
                                                            src="{{ asset('images') }}/{{ $item }}"
                                                            class="rounded mr-2 mb-1 mb-md-0" width="170"
                                                            height="110" alt="Blog Featured Image" />

                                                        <div class="middle"></div>

                                                        <svg class="photos-remove"
                                                            style="position: absolute;top:0;right: 11px;background: #fff;border-radius: 50%;"
                                                            xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="#ff2825" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
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
                                            <h5 class="mb-0">Select one or multiple image:</h5>

                                            <small class="text-muted">Ideal image resolution 800x400.</small>
                                            <p class="my-50">
                                                {{-- <a href="javascript:void(0);" id="blog-image-text"></a> --}}
                                            </p>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" name="photos[]" class="custom-file-input"
                                                            id="blogCustomFile" accept="image/*" multiple />
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
                                <a href="{{ route('products') }}" type="reset"
                                    class="btn btn-outline-secondary">Cancel</a>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    @push('css')
        <style>
            .add-more {
                background: blue;
                color: white;
                padding: 3px 8px;
                border-radius: 20px;
                font-weight: 900;
                border: 2px solid;
                height: 30px;
                width: 30px;
                margin-top: 5px;
            }

            .remove-more {
                background: red;
                color: white;
                padding: 3px 8px;
                border-radius: 20px;
                font-weight: 900;
                border: 2px solid;
                height: 30px;
                width: 30px;
                margin-top: 5px;
            }
        </style>
    @endpush
@endsection

@push('js')
    <script>
        $("#add-product").on("submit", function() {
            $("#hiddenArea").val(editor.root.innerHTML);
        });

        function field(x) {
            return ` <div class="row product-row">
                        <div class="col-md-12 col-12 d-flex">
                            <div class="col-md-5" style="padding: 0px!important">
                                <input type="text" name="details[${x}][key]" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="details[${x}][value]" class="form-control" required>
                            </div>
                            <a href="javascript:;" class="remove-more remove_button" >-</a>
                        </div>
                    </div>`;

        }


        $(document).ready(function() {

            var maxField = 20; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var x = 1;

            //Once add button is clicked
            $(addButton).click(function() {
                //Check maximum number of input fields
                if (x < maxField) {
                    //Increment field counter
                    $(wrapper).append(field(x)); //Add field html
                    x++;
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).closest('.product-row').remove();
            });
        });
    </script>
    <script>
        $("#blog_edit_form").on("submit", function() {
            $("#hiddenArea").val(blogEditor.root.innerHTML);
        });
    </script>

    <script>
        $("#blog_edit_form").on("submit", function() {
            $("#hiddenArea").val(blogEditor.root.innerHTML);
        });

        $(".photos-remove").click(function() {
            $(this).parent().remove();
        });
    </script>

    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('#specs'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#accessories'))
            .catch(error => {
                console.error(error);
            });
        // ClassicEditor
        //     .create(document.querySelector('#features'))
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>
@endpush
