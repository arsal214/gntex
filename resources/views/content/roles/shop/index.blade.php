@extends('layouts.app')

@section('title', 'Shop Roles')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="#" class="text-muted fw-light">Shop Roles /</a>
        </h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="border-bottom card-header d-flex justify-content-between align-items-center">

                        <h5 class="card-title">
                            {{ __('Shop Roles') }}
                        </h5>

                        <a href="{{ route('roles.shop.create') }}" class="btn btn-primary">
                            <i class="fa fa-fw fa-plus"></i>  {{ __('Add New Record') }}
                        </a>
                    </div>

                    <div class="card-datatable table-responsive">
                        <table id="datatable" class="datatables-users table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Name</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $i => $role)
                                    <tr>
                                        <td></td>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $role->name }}</td>

                                        <td>

                                            <form action="{{ route('roles.shop.destroy', $role->id) }}" method="POST">
                                                    <a href="{{ route('roles.shop.show', $role->id) }}"
                                                       class="btn rounded-pill btn-icon btn-label-secondary waves-effect"><i
                                                            class="fa fa-fw fa-eye"></i></a>
                                                <a href="{{ route('roles.shop.edit', $role->id) }}"
                                                    class="btn rounded-pill btn-icon btn-label-primary waves-effect"><i
                                                        class="fa fa-fw fa-edit"></i> </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn rounded-pill btn-icon btn-label-danger waves-effect"><i
                                                        class="fa fa-fw fa-trash"></i> </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="{{ asset('admin/js/datatable.js') }}"></script>
@endsection
