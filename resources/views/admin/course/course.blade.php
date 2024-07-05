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
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif          
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
                                <a href="{{ route('course.delete', [ "id" => $item->id ]) }}" class="btn btn-outline-danger waves-effect danger">Delete</a>
                                <a href="{{ route('course.edit', [ "id" => $item->id ]) }}" class="btn btn-outline-success waves-effect success font-weight-bold">Edit</a>
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
