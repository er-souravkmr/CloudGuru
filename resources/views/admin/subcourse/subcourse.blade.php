@extends('admin.layouts.app')
@section('title', 'Subcourse Management')
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
                <h2 class="content-header-title float-left mb-0">SubCourse Management</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
            <div class="dropdown">
                <a href="{{ route('subcourse.create') }}"
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
                        <div class="text-center">
                            @if (session('message'))
                                <div class="alert alert-success"> {{ session('message') }} </div>
                            @endif
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table" id="subcourse-list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>SubCourse</th>
                                            <th>Course</th>
                                            <th>Status</th>
                                            <th>Time</th>
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
@endsection


@push('js')
    <script>
        $(function() {
            $('#subcourse-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('subcourse.show') !!}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'course'
                    },
                    {
                        data: 'courses'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'created_at'
                    },

                    {
                        data: 'action'
                    },
                ],

                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        footer: true,
                        titleAttr: 'PDF',
                        extension: ".pdf",
                        filename: "SubCourse",
                        title: "",
                        text: '<i class="fadeIn animated bx bx-file-blank">PDF</i> ',
                        className: 'btn btn-success',
                        messageTop: 'All Subcourses',

                        exportOptions: {
                            // stripHtml: false,
                            columns: [0, 2, 3]

                        },
                    },
                    {
                        extend: 'csv',
                        footer: false

                    },
                    {
                        extend: 'excel',
                        footer: false
                    },
                    {
                        extend: 'copy',
                        footer: false
                    },
                    {
                        extend: 'print',
                        footer: false
                    }
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
                    window.location.replace("{{ route('subcourse.status', []) }}?id=" + $id +
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
                    window.location.replace("{{ route('subcourse.delete', []) }}?id=" + $contact);
                },
            });
        }
    </script>
@endpush
