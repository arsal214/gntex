@extends('layouts.app')

@section('template_title')
    {{ $role->name ?? "Show" }}
@endsection

@section('content')
    <section class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="{{route('roles.shop.index')}}" class="text-muted fw-light">Shop Roles /</a>
            <a href="#"> Show</a>
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="border-bottom card-header d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <h5 class="card-title">{{ __('Show') }} Shop Role</h5>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.shop.index') }}">Return {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body pt-3">

                        <div class="form-group">
                            <strong>Role Name:</strong>
                            {{ $role->name }}
                        </div>
                            @foreach($groupedPermissions as $groupName => $permissions)
                                <h5 class="text-capitalize mt-2 mb-1">{{ $groupName }}</h5>
                            <div class="row">
                                @foreach($permissions as $permission)
                                    @php
                                        $displayName = $permission->name;

                                        if (strpos($permission->name, '-') !== false) {
                                            $title = explode('-', $permission->name);
                                            $displayName = $title[1];
                                        }
                                    @endphp
                                    <div class="col-3">
                                        {{$displayName}}
                                    </div>
                                @endforeach
                            </div>
                            @endforeach
                        <hr>
                        <h5>Configurations</h5>
                        <ul>
                            @foreach (vendorAllConfigurations() as $key => $configurations)
                                <div class="col-md-12 gap-4">
                                    <h5 class="m-0">{{ $key }}:</h5>
                                    <div class="row">
                                        @foreach ($configurations as $configuration)
                                            @if ($role->id)
                                                @php
                                                    $selectedRoleConfig = collect($configuration['role_configurations'])
                                                        ->where('role_id', $role->id)
                                                        ->first();
                                                    $selected = $selectedRoleConfig ? $selectedRoleConfig['value'] : null;
                                                @endphp
                                            @else
                                                @php $selected = ''@endphp
                                            @endif
                                            <div class="col-md-6 gap-4">
                                                <div class="form-check me-3 me-lg-5">
                                                    <div class="col-12">
                                                        <label>{{ $configuration['title'] }} : {{$selected}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
