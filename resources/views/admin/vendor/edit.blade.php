@extends('layouts.backend.master')
@section('base.title', 'Edit Vendor')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="section-header">
        <h1>Edit Vendor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('vendor.index') }}">Vendor List</a></div>
            <div class="breadcrumb-item">Edit Vendor</div>
        </div>
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Vendor</h4>
                        <a href="{{ route('vendor.index') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> All Vendor</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                                <form action="{{ route('vendor.update', [$vendor->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Vendor Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $vendor->name }}">
                                            @error('name')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Vendor Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ $vendor->email }}">
                                            @error('email')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="vendor_address">Vendor Address</label>
                                            <textarea name="vendor_address" id="vendor_address" rows="4" class="form-control">{{ $vendor->vendor_address }}</textarea>
                                            @error('vendor_address')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $vendor->company_name }}">
                                            @error('company_name')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="company_address">Company Address</label>
                                            <textarea name="company_address" id="company_address" rows="4" class="form-control">{{ $vendor->company_address }}</textarea>
                                            @error('company_address')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input type="text" class="form-control" name="contact" id="contact" value="{{ $vendor->contact }}">
                                            @error('contact')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option style="display: none" value="{{ $vendor->status }}" selected>@if($vendor->status == 1) active @else inactive @endif</option>
                                                <option value="1">active</option>
                                                <option value="0">inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                        <div>
                                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                                            <a href="{{ route('vendor.index') }}" class="btn btn-md btn-info">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('base.js')
<script>
    $(document).ready(function(){
        $(['#company_address', '#vendor_address']).summernote();
    });
</script>
@endpush