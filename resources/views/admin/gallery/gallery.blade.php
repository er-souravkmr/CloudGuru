@extends('admin.layouts.app')

@section('title','Gallery')

@section('row')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Gallerys List</h2>

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
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif          
            <div class="row">

            @foreach ($gallery as $item)
                <div class="col-md-4 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid" src="{{asset ('public/uploads/gallery')}}/{{ $item->image }}" alt="gallery_pic" style="height: 300px; padding:20px">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('gallery.delete', [ "id" => $item->id ]) }}" class="btn btn-outline-danger waves-effect danger">Delete</a>
                                <a href="{{ route('gallery.edit', [ "id" => $item->id ]) }}" class="btn btn-outline-success waves-effect success font-weight-bold">Edit</a>
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
