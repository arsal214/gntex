@extends('layouts.app')

@section('title', 'Size')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card">
            <div class="border-bottom card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">
                    {{ __('Size') }}
                </h5>
                <div>
                    <a href="{{ route('sizes.create') }}" class="btn btn-primary" data-placement="left">
                        {{ __('Create New') }}
                    </a>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table" id="datatable">
                    <thead class="thead">
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sizes as $i => $list)
                            <tr>
                                <td></td>
                                <td>{{ ++$i }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->qty }}</td>
                                <td>
                                    <a href="{{ route('sizes.edit', $list->id) }}"
                                       class="btn rounded-pill btn-icon btn-label-primary waves-effect ml-2"><i
                                            class="fa fa-fw fa-edit"></i> </a>
                                        <form action="{{ route('sizes.destroy', $list->id) }}" class="d-inline"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn rounded-pill btn-icon btn-label-danger waves-effect"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                </td>
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
