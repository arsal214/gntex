@extends('layouts.app')

@section('title', 'Permission')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="#" class="text-muted fw-light">Shop Permissions /</a>
        </h4>
        <h4 class="fw-semibold pt-3 mb-1">Shop Permissions List</h4>
        <p class="mb-4">
            Each category (Basic, Professional, and Business) includes the four predefined roles shown below.
        </p>
        <div class="card">
            <div class="border-bottom card-header d-flex justify-content-between align-items-center">

                <h5 class="card-title">
                    {{ __('Permission') }}
                </h5>
                @can('shopPermissions-create')
                    <button data-bs-target="#addPermission" data-bs-toggle="modal"
                        class="btn btn-primary mb-3 text-nowrap add-new-permssion" data-placement="left">
                        <i class="fa fa-fw fa-plus"></i> {{ __('Add New Record') }}
                    </button>
                @endcan
            </div>
            <div class="card-datatable table-responsive text-nowrap">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Display Name</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>{{ $permission->display_name }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>

                                    @can('shopPermissions-edit')
                                        <button type="button" data-bs-dismiss="modal" data-bs-toggle="modal"
                                            data-bs-target="#editPermission{{ $key }}"
                                            class="btn rounded-pill btn-icon btn-label-primary waves-effect me-1">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </button>
                                    @endcan
                                    @can('shopPermissions-delete')
                                        <form class="d-inline-block" method="POST" action="{{ route('permissions.shop.destroy', $permission->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn rounded-pill btn-icon btn-label-danger waves-effect">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </button>
                                        </form>
                                    @endcan

                                    @include('content.permission.shop.edit')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('content.permission.shop.create')
@endsection
@section('page-script')
    <script src="{{ asset('admin/js/datatable.js') }}"></script>
@endsection
