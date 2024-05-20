@extends('layouts.app')

@section('title', 'Permission')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="#" class="text-muted fw-light">Admin Permissions /</a>
        </h4>
        <h4 class="fw-semibold pt-3 mb-1">Admin Permissions List</h4>
        <p class="mb-4">
            Each category (Basic, Professional, and Business) includes the four predefined roles shown below.
        </p>
        <div class="card">
            <div class="border-bottom card-header d-flex justify-content-between align-items-center">

                <h5 class="card-title">
                    {{ __('Permission') }}
                </h5>
                <button data-bs-target="#addPermission" data-bs-toggle="modal"
                        class="btn btn-primary mb-3 text-nowrap add-new-permssion" data-placement="left">
                    <i class="fa fa-fw fa-plus"></i> {{ __('Add New Record') }}
                </button>
            </div>

            <div class="card-datatable table-responsive text-nowrap">
                <table class="datatables-users table table-bordered" id="datatable">
                    <thead>
                    <tr>
                        <th>Display Name</th>
                        <th>Name</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <td>{{ $permission->display_name }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->created_at }}</td>
                            <td>{{ $permission->updated_at }}</td>
                            <td>

                                @can('adminPermissions-edit')
                                    <button data-bs-dismiss="modal" data-bs-toggle="modal"
                                            data-bs-target="#editPermission{{ $key }}"
                                            class="btn rounded-pill btn-icon btn-label-primary waves-effect ">
                                        <i class="mdi mdi-pencil-outline me-1"></i>
                                    </button>
                                @endcan
                                @include('content.permission.admin.edit')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('content.permission.admin.create')
@endsection
@section('page-script')
    <script src="{{ asset('admin/js/datatable.js') }}"></script>
@endsection
