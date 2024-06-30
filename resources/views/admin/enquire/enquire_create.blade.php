@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('row')

    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Product Create</h2>

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

                        <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('product.store') }}"
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

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="details">Project Details</label>
                                        <div class="field_wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-12" style="padding-right: 0px;">

                                                    <div>
                                                        <label for="key">Key</label>
                                                        <input type="text" name="details[0][key]" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12" style="padding-right: 0px;">
                                                    <div>
                                                        <label for="value">Value</label>
                                                        <input type="text" name="details[0][value]" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-12">
                                                    <a href="javascript:;" class="add_button add-more">+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Category</label>
                                        <select class="select2 form-control-lg select2-hidden-accessible" id="category"
                                            name="category" required>
                                            <option>Select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ ucfirst($category->title) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label>Features </label>
                                        <div id="blog-editor-wrapper">
                                            <div id="blog-editor-container">
                                                <div class="editor">
                                                </div>
                                                <textarea style="display:none"  id="features" name="features"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Technical Specifications</label>
                                        <textarea class="form-control" id="specs" name="specification"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group mb-2">
                                        <label for="category">Accessories</label>
                                        <textarea class="form-control" id="accessories" name="accessories"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Featured Image</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0"
                                                width="170" height="110" alt="Blog Featured Image" />
                                            <div class="media-body">
                                                <h5 class="mb-0">Main image:</h5>
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    {{-- <a href="javascript:void(0);" id="blog-image-text"></a> --}}
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
                                                                accept="image/*" multiple />
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

            .reset-boxes {
                cursor: pointer;
            }

            .reset-boxes:hover {
                color: white;
                font-weight: bolder;
            }
        </style>
    @endpush

@endsection

@push('js')
    <script>
        var COLUMN_COUNT = 0; //Column Count for TS Data
        var ROW_COUNT = 1;

        $(document).ready(function() {

            $(".reset-boxes").on("click", function() {
                $(".clear-boxes").hide();
                $(".column-dbox").hide();
                $(".column-hbox noOfCols").val("");
                $(".column-hbox").show();
                $(".table-box").hide();
            });

            $("#addColumns").on("click", function() {
                var noOfCols = $("#noOfCols").val();
                if (noOfCols >= 1) {
                    $(".clear-boxes").show(); //Opening Clear TS Boxes

                    $(".column-dbox").append(`<div class="row">
                                                <div class="col-md-6">`);
                    for (let x = 0; x < noOfCols; x++) {
                        $(".column-dbox").append(`<div class="m-1">
                                <small class="d-block">Enter Column ${x+1} Name:</small>
                                <input type="text" name="tsColumnName[${x}]" class="form-control">
                            </div>`);
                        COLUMN_COUNT++;
                    }
                    $(".column-dbox").append(
                        `<p class="text-center"><button type="button" class="btn btn-sm btn-info" onclick="javascript:createTableRowsofCoumns();">Add Rows</button></p>`
                    );
                    $(".column-dbox").append(`</div></div>`);

                    //Hiding Header Box
                    $(".column-hbox").hide();


                } else {
                    alert('Enter correct number of columns to be created.')
                }

                tsRCUpdate(); //Updating Rows/Columns Count
            });

        });



        function createTableRowsofCoumns() {

            //Hiding Boxes
            $(".column-hbox").hide();
            $(".column-dbox").hide();
            //End of Hiding Boxes

            //Populating Headings
            for (let ind = 0; ind < COLUMN_COUNT; ind++) {
                $("#tsMainTable > thead > tr").append(`<th>` + $("input[name='tsColumnName[" + ind + "]']").val() +
                    `</th>`);
                $("#tsMainTable > tbody > tr").append(
                    `<td><input type="text" name="tsRow[0][${ind}]" class="form-control"></td>`);
            }
            //End of Haeader Population

            //Showing table
            $(".table-box").show();

            tsRCUpdate(); //Updating Rows/Columns Count
        }

        function addTSTableRows() {
            var rowBase = null;
            for (let ind = 0; ind < COLUMN_COUNT; ind++) {
                rowBase = rowBase +
                    `<td><input type="text" name="tsRow[${ROW_COUNT}][${ind}]" class="form-control"></td>`
            }

            $("#tsMainTable > tbody").append(
                `<tr>` + rowBase + `</tr>`);

            ROW_COUNT++;

            tsRCUpdate(); //Updating Rows/Columns Count
        }

        function removeTSTableRows() {

            if (ROW_COUNT > 1) {
                for (let ind = 0; ind < COLUMN_COUNT; ind++) {
                    var rowId = (ROW_COUNT - 1);
                    $("#tsMainTable > tbody input[name='tsRow[" + rowId + "][" + ind + "]']").parent().remove();
                }

                ROW_COUNT--;
            }

            tsRCUpdate(); //Updating Rows/Columns Count
        }

        function tsRCUpdate() {
            $("#tsNOROWS").val(ROW_COUNT);
            $("#tsNOCOLUMNS").val(COLUMN_COUNT);
        }

        $("#add-product").on("submit", function() {
            $("#hiddenArea").val(editor.root.innerHTML);
        });

        function field(x) {
            return ` <div class="row product-row">
                        <div class="col-md-5 col-12" style="padding-right: 0px;">
                            <div>
                                <input type="text" name="details[${x}][key]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12" style="padding-right: 0px;">
                            <div>
                                <input type="text" name="details[${x}][value]" class="form-control" required>
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
            $("#features").val(blogEditor.root.innerHTML);
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
            // .create(document.querySelector('#features'))
            // .catch(error => {
            //     console.error(error);
            // });


    </script>
@endpush
