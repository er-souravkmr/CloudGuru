@extends('admin.layouts.app')

@section('title','Course')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Courses List</h2>

        </div>
    </div>
</div>
<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
    <div class="form-group breadcrumb-right">
        <div class="dropdown">
            <a href="{{ route('course.create') }}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button">create</a>
        </div>
    </div>
</div>
@endsection


@section('content')

<div class="content-detached content-left">
        <div class="blog-list-wrapper">
            <div class="row">

            @foreach ($course as $item)
                <div class="col-md-4 col-12">
                    <div class="card">
                        {{-- <a href="#">
                            <img class="card-img-top img-fluid" src="{{asset ('images')}}/{{ $item->image }}" alt="Blog Post pic" style="height: 200px;">
                        </a> --}}
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#" class="blog-title-truncate text-body-heading">
                                    {{ substr($item->courses,0,30) }}
                                    @if(strlen($item->courses) > 30 )...@endif
                                </a>
                            </h4>
                         
                        
                           
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <button data-id="{{ $item->id }}" type="button" class="delete-blog btn btn-outline-danger waves-effect danger">Delete</button>
                                <a href="{{ route('enquire.edit', [ "id" => $item->id ]) }}" class="font-weight-bold">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      
            <div class="mb-5 d-flex justify-content-end">
                {{-- {{ $enquire->links() }} --}}
            </div>

        </div>
 
</div>

@endsection

{{-- @push('js')
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

                window.location.replace("{{ route('blog.delete', []) }}?id=" + $blog_id);
            },
        });
    });
</script>
@endpush --}}