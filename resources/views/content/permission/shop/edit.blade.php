<div class="modal fade" id="editPermission{{$key}}" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-3 p-md-5">
			<button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body p-md-0">
				<div class="text-center mb-4">
                    <h3 class="mb-2 pb-1">Edit Permission</h3>
                    <p>Edit permission as per your requirements.</p>
                </div>
                <div class="alert alert-info" role="alert">
                    <h6 class="alert-heading mb-2">Warning</h6>
                    <p class="mb-0 text-wrap">
						By editing the permission name, you might not break the system
                        functionality. It will change only display Name.
                    </p>
                </div>
                <form class="row pt-2" method="POST" action="{{ route('permissions.shop.update', $permission->id )}}">
                    {{ method_field('PATCH') }}
                    @csrf
                    <div class="col-12 mb-3">
                        <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="permission_name"
                              name="permission_name"
                              class="form-control"
                              placeholder="Permission Name"
                              tabindex="-1"
                              value="{{ $permission->name }}"/>
                            <label for="display_name">Permission Name</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="display_name"
                              name="display_name"
                              class="form-control"
                              placeholder="Permission Display Name"
                              tabindex="-1"
                              value="{{ $permission->display_name }}"/>
                            <label for="display_name">Permission Display Name</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-1 mt-sm-0">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
