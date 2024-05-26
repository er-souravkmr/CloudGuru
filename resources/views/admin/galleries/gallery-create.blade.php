@extends('admin.layouts.app')
@section('title', 'Create Gallery')
@section('row')

    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Gallery Create</h2>

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

                        <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('gallery.store') }}"
                            method="POST" class="mt-2">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-title">Title</label>
                                        <input name="title" type="text" id="blog-edit-title" class="form-control"
                                            required />
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-status">View Status</label>
                                        <select name="status" class="form-control" id="blog-edit-status">
                                            <option value="1">Publish</option>
                                            <option selected value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Additional Image/Images</h4>
                                        <div class="media flex-column flex-md-row">
                                            <div class="media-body">
                                                <h5 class="mb-0">Select one or multiple image:</h5>
                                                <small class="text-muted">Ideal image resolution 800x400.</small>
                                                <p class="my-50">
                                                    {{-- <a href="javascript:void(0);" id="blog-image-text"></a> --}}
                                                </p>
                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input type="file" name="photos[]"
                                                                class="custom-file-input" id="blogCustomFile"
                                                                accept="video/*,image/*" multiple />
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
                margin-top: 40px;
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
                margin-top: 40px;
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
                        <div class="col-md-5 col-12">
                            <div class="m-1">
                                <input type="text" name="specification[0][key]"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="m-1">
                                <input type="text" name="specification[0][value]"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1 col-12">
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
@endpush
