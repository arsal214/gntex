@can('users-edit')
    <a href="{{ route('users.edit', $user->id) }}" class="btn rounded-pill btn-icon btn-label-primary waves-effect me-1">
        <i class="mdi mdi-pencil-outline me-1"></i>
    </a>
@endcan
@can('users-delete')
    <form class="d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn rounded-pill btn-icon btn-label-danger waves-effect me-1">
            <i class="mdi mdi-delete-outline me-1"></i>
        </button>
    </form>
@endcan
