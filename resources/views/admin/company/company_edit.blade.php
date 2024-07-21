@extends('admin.layouts.app')

@section('title', 'Edit Companys')

@section('row')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Companys Edit</h2>

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

                        <form enctype="multipart/form-data" id="blog_edit_form" action="{{ route('company.update',['id'=>$company->id]) }}" method="POST" class="mt-2">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="name">Company Name</label>
                                        <input name="name" value="{{$company->name}}" type="text" id="name" class="form-control" required />
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" id="status">
                                            <option {{$company->status==1?"selected":""}} value="1">Published</option>
                                            <option {{$company->status==0?"selected":""}} value="0">Draft</option>
                                        </select>
                                    </div>  
                                </div>
                               
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="name">Existing Image</label>
                                        <img id="image_old" style="width: 50; height:50px;" class="d-block me-2 lozad" src="{{asset('public/uploads/company')}}/{{ $company->image }}" data-loaded="true">
                                    </div>
                                </div>
    
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="image">Upload Image</label>
                                        <input type="file" id="image"  accept="image/png, image/gif, image/jpeg" class="form-control" name="company_image"  />
                                    </div>
                                </div>
                            
                                
    
                                <div class="col-12 mt-50">
                                    <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                    <a href="{{route('company')}}" type="reset" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@push('js')
    <script>
        $("#blog_edit_form").on("submit", function() {
            $("#hiddenArea").val(blogEditor.root.innerHTML);
        });
    </script>
@endpush
