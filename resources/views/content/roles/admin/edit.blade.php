<div class="modal fade" id="editRole{{ $role->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-add-new-role">
        <div class="modal-content p-3 p-md-5">
            <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-md-0">
                <div class="text-center mb-4">
                    <h3 class="role-title mb-2 pb-0">Update Role</h3>
                    <p>Set role permissions</p>
                </div>
                <form id="addRoleForm" class="row g-3" action="{{ route('roles.admin.update', $role->id) }}" method="POST">
                    {{ method_field('PATCH') }}
                    @csrf
                    <div class="col-12 mb-4">
                        <div class="form-floating form-floating-outline">
                            <input
                                type        = "text"
                                value       = "{{ $role->name }}"
                                id          = "modalRoleName"
                                name        = "role"
                                class       = "form-control"
                                placeholder = "Enter a role name"
                                tabindex="-1"  required="required" />
                            <label for="modalRoleName">Role Name</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Role Permissions</h5>
                        <div class="table-responsive">
                            <table class="table table-flush-spacing">
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Permissions</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input selectAll" type="checkbox" id="selectAll"/>
                                                <label class="form-check-label" for="selectAll">
                                                    Select All
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @php($rolePermissions = rolePermissions($role->id))
                                    @foreach (adminAllPermissions() as $title => $permissions)
                                        <tr>
                                            <td class="text-nowrap fw-semibold text-capitalize">
                                                {{ $title }}
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @foreach ($permissions as $permission)
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input
                                                            class = "form-check-input"
                                                            type  = "checkbox"
                                                            name  = "permissions[]"
                                                            id    = "edit{{ $role->id.$permission['id'] }}"
                                                            value = "{{ $permission['id'] }}"
                                                            {{ in_array($permission['id'] , $rolePermissions) ? 'checked' : ''}}/>
                                                        <label
                                                            class = "form-check-label text-capitalize"
                                                            for   = "edit{{ $role->id.$permission['id'] }}">
                                                            {{ $permission['name'] }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
