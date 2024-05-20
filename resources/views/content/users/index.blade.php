@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <div class="row g-4 mb-4">
        @include('content.users.cards')
    </div> --}}
        <div class="card">
            <div class="border-bottom card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Staff List</h5>
                @can('users-create')
                    <a href="{{ route('users.create') }}" class="btn btn-primary">  <i class="fa fa-fw fa-plus"></i>  {{ __('Add New Record') }} </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table table-bordered" id="datatable">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td></td>
                                <td>{{ ++$key }}</td>
                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge rounded-pill bg-success">
                                            {{ $role->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    @can('users-edit')
                                        <form action="{{ route('accounts.web-list-status', $user->id) }}" method="POST">
                                            @csrf
                                            {{ method_field('PATCH') }}
                                            <label class="switch switch-primary">
                                                <input type="checkbox" class="switch-input" name="status"
                                                    {{ $user->status == 'Active' ? 'checked' : '' }}
                                                    onChange="event.preventDefault();
                                            this.closest('form').submit();">
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                            </label>
                                        </form>
                                    @endcan
                                </td>
                                <td>@include('content.users.actions')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="{{ asset('admin/js/datatable.js') }}"></script>
@endsection
