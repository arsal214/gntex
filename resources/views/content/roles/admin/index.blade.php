@extends('layouts.app')

@section('title', 'Admin Roles')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="#" class="text-muted fw-light">Admin Role /</a>
        </h4>
        <h4 class="fw-medium mb-1">Admin Roles List</h4>
        <p class="mb-4">
            A role provided access to predefined menus and features so that depending on assigned role an
            administrator can have access to what user needs.
        </p>
        <div class="row g-4">
            @foreach ($roles as $role)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <h6 class="fw-normal">Total {{ $role->users()->count() }} users</h6>
                                <ul class="list-unstyled d-flex align-items-center avatark-group mb-0">
                                    @include('content.roles.admin.avatar')
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="role-heading">
                                    <h4 class="mb-1 text-body text-capitalize">{{ $role->name }}</h4>
                                    @can('adminRoles-edit')
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editRole{{ $role->id }}"
                                            class="role-edit-modal">
                                            <span>Edit Role</span>
                                        </a>
                                    @endcan
                                    @include('content.roles.admin.edit')
                                </div>
                                @can('adminRoles-delete')
                                    <form method="POST" action="{{ route('roles.admin.destroy', $role->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-muted border-0 btn btn-link sa-confirm">
                                            <i class="mdi mdi-trash-can-outline mdi-20px"></i>
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100">
                    <div class="row h-100">
                        <div class="col-5">
                            <div class="d-flex align-items-end h-100 justify-content-center">
                                <img src="{{ asset('theme/img/illustrations/add-new') }}-role-illustration.png"
                                    class="img-fluid" alt="Image" width="70" />
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="card-body text-sm-end text-center ps-sm-0">
                                @can('adminRoles-create')
                                    <button data-bs-target="#addRole" data-bs-toggle="modal"
                                        class="btn btn-primary mb-3 text-nowrap add-new-role">
                                        <i class="fa fa-fw fa-plus"></i>  {{ __('Add Role') }}
                                    </button>
                                @endcan
                                <p class="mb-0">Add role, if it does not exist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('content.roles.admin.create')
@endsection

@section('page-script')
    <script src="{{ asset('theme/js/app-access-roles.js') }}"></script>
    <script src="{{ asset('theme/js/modal-add-role.js') }}"></script>
    <script>
        const selectAll = document.querySelectorAll('.selectAll'),
            checkboxList = document.querySelectorAll('[type="checkbox"]');

        selectAll.forEach(element => {
            element.addEventListener('change', t => {
                checkboxList.forEach(e => {
                    e.checked = t.target.checked;
                });
            });
        });
    </script>
@endsection
