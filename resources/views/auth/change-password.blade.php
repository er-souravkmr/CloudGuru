@extends('admin.layouts.app')

@section('title', 'Change Password')

@section('row')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Change Password</h2>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('content')


<div class="pricing-edit-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        
                        <form enctype="multipart/form-data" id="faq_edit_form" action="{{ route('create.new.password') }}"
                            method="POST" class="mt-2">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="old-password">Old Password</label>
                                        <input name="old_password" type="password" id="old-password" class="form-control"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="change-password">New Password</label>
                                        <input name="password" type="password" id="change-password" class="form-control"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input name="password_confirmation" type="password" id="confirm-password"
                                            class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-12 mt-50">
                                    <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
