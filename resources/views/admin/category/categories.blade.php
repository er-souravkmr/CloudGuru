@extends('admin.layouts.app')

@section('title', 'Category Management')

@section('row')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Category Management</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
            <div class="dropdown">
                <a href="{{ route('category.create') }}"
                    class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light"
                    type="button">create</a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <section id="multilingual-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table" id="category-list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Created at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.category.edit-category')
@endsection



@push('js')
    <script>
        $(function() {
            $('#category-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('category.show') !!}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'images'
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'action'
                    },
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });


        function changeStatus(id, el) {

            $id = id;
            $status = $(el).val();
            Swal.fire({
                title: 'Are you sure?',
                text: "Do You Want To Change Status!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, I Want!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ml-1'
                },
                buttonsStyling: false,
                preConfirm: function($login, $blod_id) {
                    window.location.replace("{{ route('category.change.status', []) }}?id=" + $id +
                        "&status=" +
                        $status);
                },
            });
        }

        function deleteItem(id) {
            $contact = id;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ml-1'
                },
                buttonsStyling: false,
                preConfirm: function() {
                    window.location.replace("{{ route('category.delete', []) }}?id=" + $contact);
                },
            });
        }


        function editCategory(id, name, status, image) {
            console.log(image);
            $el = $("#edit-category");
            $el.find('input[name="id"]').val(id);
            $el.find('input[name="name"]').val(name);
            $el.find('#image').attr("src", image);
            $('#status').val(status).trigger('change');
            $el.modal("show");
        }
    </script>
@endpush
