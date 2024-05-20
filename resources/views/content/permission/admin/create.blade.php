<div class="modal fade" id="addPermission" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
        <div class="modal-content p-3 p-md-5">
            <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-md-0">
                <div class="text-center mb-4">
                    <h3 class="role-title mb-2 pb-0">Add New Permission</h3>
                </div>
                <form id="addRoleForm" class="row g-3" action="{{ route('permissions.admin.store') }}" method="POST">
                    @csrf
                    <div class="col-12 mb-4">
                        <div class="form-floating form-floating-outline">
                            <input
                            	type 		= "text"
                            	id 			= "modalRoleName"
                            	name 		= "display_name"
                            	class 		= "form-control"
                                placeholder = "Enter a Permission Display name"
                                tabindex 	= "-1"  required="required" />
                            <label for="modalRoleName">Permission Display Name</label>
                        </div>
                    </div><div class="col-12 mb-4">
                        <div class="form-floating form-floating-outline">
                            <input
                            	type 		= "text"
                            	id 			= "modalRoleName"
                            	name 		= "permission_name"
                            	class 		= "form-control"
                                placeholder = "Enter a Permission name"
                                tabindex 	= "-1"
                            required="required"/>
                            <label for="modalRoleName">Permission Name(No Space)</label>
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
