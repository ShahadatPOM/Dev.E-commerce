@extends('layouts.backend.master')
@section('base.title', 'Currency List')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>All Currencys</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Currency</div>
    </div>
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>currencys List</h4>
                        <a href="{{ route('currency.create') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> Add New</a>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th class="p-0 text-center">ID</th>
                                    <th class="p-0 text-center">Currency Name</th>
                                    <th class="p-0 text-center">Code</th>
                                    <th class="p-0 text-center">Symbol</th>
                                    <th class="p-0 text-center">Conversion Rate</th>
                                    <th class="p-0 text-center">Status</th>
                                    <th class="p-0 text-center">Action</th>
                                </tr>
                                @if($currencies->count() > 0)
                                @foreach($currencies as $currency)
                                <tr>
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="p-0 text-center">{{ $currency->id }}</th>
                                    <td class="p-0 text-center">{{ $currency->name }}</td>
                                    <td class="p-0 text-center">{{ $currency->code  }}</td>
                                    <td class="p-0 text-center">{{ $currency->symbol }}</td>
                                    <td class="p-0 text-center">{{ $currency->conversion_rate }}</td>
                                
                                    <td class="p-0 text-center">
                                        @if($currency->status == 1) <span class="badge badge-success">Active</span>@else
                                        <span class="badge badge-danger">Inactive</span> @endif
                                    </td>
                                    <td class="p-0 text-center">
                                        <a class="btn btn-sm btn-warning btn-xs"
                                            href="{{ route('currency.edit', $currency->id) }}"><i
                                                class="fas fa-pen-square"></i></a>
                                        <form action="{{ route('currency.destroy', $currency->id) }}" method="post"
                                            style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="alert('Are You Sure to DELETE!')"
                                                class="btn btn-sm btn-danger btn-xs"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8" style="text-align: center; color: grey">No currency found</td>
                                </tr>
                                @endif
                            </table>
                            {{ $currencies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
