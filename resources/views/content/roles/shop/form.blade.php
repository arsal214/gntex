<div class="row g-4">

    <div class="col-md-12 form-group">
        {{ Form::label('Name') }}
        {{ Form::text('role', $role->name, ['class' => 'form-control' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="mt-4 form-repeater">
        <div class="col-12">
            <h5>Role Permissions</h5>
            <div class="row">
                <div class="col-md-12 text-nowrap fw-semibold">
                    <div class="form-check">
                        <input class="form-check-input selectAll" type="checkbox" id="selectAll" />
                        <label class="form-check-label" for="selectAll">
                            Select All
                        </label>
                    </div>
                </div>
                @php
                    $rolePermissions = rolePermissions($role->id);
                @endphp
                @foreach (vendorAllPermissions() as $title=> $permissions)
                    <div class="col-md-12">
                        <h5 class="text-capitalize mt-2 mb-1">{{ $title }}</h5>
                        <div class="row px-3">
                            @foreach ($permissions as $permission)
                            <div class="form-check col-3">
                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                    id="edit{{ $role->id . $permission['id'] }}" value="{{ $permission['id'] }}"
                                    {{ in_array($permission['id'], $rolePermissions) ? 'checked' : '' }} />
                                <label class="form-check-label text-capitalize"
                                    for="edit{{ $role->id . $permission['id'] }}">
                                    {{ $permission['name'] }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-4 form-repeater">
        <div class="col-12">
            <h5>Configurations</h5>
            <div class="row">
                @foreach (vendorAllConfigurations() as $key => $configurations)
                    <div class="col-md-12">
                        <h6 class="mt-2 mb-0 fw-semibold">{{ $key }}:</h6>
                        <div class="row">
                            @foreach ($configurations as $configuration)
                                @php
                                    $options = $configuration['options'];
                                    $finalOptions = $options;
                                @endphp
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
                                <div class="col-md-4">
                                    <label class=" mb-1 mt-2">{{ $configuration['title'] }}</label>
                                    <select name="options[{{ $configuration['id'] }}]"
                                        class="form-control form-select">
                                        @foreach ($finalOptions as $option)
                                            <option {{ $selected == $option ? 'selected' : '' }}>
                                                {{ $option }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
    </div>

</div>
