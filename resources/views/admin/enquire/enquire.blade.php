@extends('admin.layouts.app')
@section('title', 'Product Management')
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
                <h2 class="content-header-title float-left mb-0">Product Management</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
            <div class="dropdown">
                {{-- <a href="{{ route('product.create') }}"
                    class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light"
                    type="button">create</a> --}}
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
                                <table class="table" id="enquire-list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Course</th>
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
            $('#enquire-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('enquire.show') !!}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'number'
                    },
                    {
                        data: 'course'
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
                        filename: "Enquire",
                        title: "",
                        text: '<i class="fadeIn animated bx bx-file-blank">PDF</i> ',
                        className: 'btn btn-success',
                        messageTop: 'All Products',

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


    </script>
@endpush
