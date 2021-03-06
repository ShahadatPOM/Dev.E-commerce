@extends('layouts.backend.master')
@section('base.title', 'Create Currency')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>Create Currency</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('currency.index') }}">Currency List</a></div>
        <div class="breadcrumb-item">Create Currency</div>
    </div>
</div>
<!-- /.content-header -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create currency</h4>
                        <a href="{{ route('currency.index') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> All Currency</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                            <form action="{{ route('currency.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Currency Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name">
                                        @error('name')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control" name="code" id="code"
                                            placeholder="Enter code">
                                        @error('code')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Symbol</label>
                                        <input type="text" class="form-control" name="symbol" id="symbol"
                                            placeholder="Enter Symbol">
                                        @error('symbol')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="conversion_rate">Coversion Rate</label>
                                        <input type="number" class="form-control" name="conversion_rate" id="conversion_rate"
                                            placeholder="Enter Conversion Rate">
                                        @error('conversion_rate')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option style="display: none" selected>Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    @error('status')
                                    <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                        <a href="{{ route('currency.index') }}" class="btn btn-md btn-info">Back</a>
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
    $(document).ready(function () {
        $('#description').summernote();
    });

</script>
@endpush
