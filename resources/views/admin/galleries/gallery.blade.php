@extends('admin.layouts.app')
@section('title','Gallery')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Gallery</h2>

        </div>
    </div>
</div>
<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
    <div class="form-group breadcrumb-right">
        <div class="dropdown">
            <a href="{{ route('gallery.create') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button">create</a>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="content-detached content-left">
        <div class="blog-list-wrapper">
            <div class="row">

                @foreach ($galleries as $item)
                <div class="col-md-4 col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#" class="blog-title-truncate text-body-heading">
                                    {{ substr($item->title,0,30) }}
                                    @if(strlen($item->title) > 30 )...@endif
                                </a>
                            </h4>
                            <div class="media">

                                <div class="media-body">
                                    <small class="text-muted mr-25">{{ $item->slug }}</small>
                                    <span class="text-muted ml-50 mr-25">|</span>
                                    <small class="text-muted">{{ $item->updated_at }}</small>
                                </div>
                            </div>
                            <div class="my-1 py-25">
                                @if ($item->status==0)
                                <a href="javascript:void(0);">
                                    <div class="badge badge-pill badge-light-danger mr-50">Draft</div>
                                </a>
                                @else
                                <a href="javascript:void(0);">
                                    <div class="badge badge-pill badge-light-success">Published</div>
                                </a>
                                @endif


                            </div>
                            
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <button data-id="{{ $item->id }}" type="button" class="delete-blog btn btn-outline-danger waves-effect danger">Delete</button>
                                <a href="{{ route('gallery.edit', [ "id" => $item->id ]) }}" class="font-weight-bold">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      
            <div class="mb-5 d-flex justify-content-end">
                {{ $galleries->links() }}
            </div>

        </div>
 
</div>

@endsection

@push('js')
<script src="{{ asset("admin-assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js") }}"></script>
<script>
    $(".delete-blog").on('click', function() {
        $blog_id = $(this).data("id");
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
            preConfirm: function($login, $blod_id) {

                window.location.replace("{{ route('gallery.delete', []) }}?id=" + $blog_id);
            },
        });
    });
</script>
@endpush