<div class="row g-4">
	<div class="col-md-6">
		{{ Form::label('first_name') }}
		{{ Form::text('first_name', $user->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name','required']) }}
        {!! $errors->first('first_name', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="col-md-6">
		{{ Form::label('last_name') }}
		{{ Form::text('last_name', $user->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name','required']) }}
        {!! $errors->first('last_name', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="col-md-6">
		{{ Form::label('email') }}
		{{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email','required']) }}
        {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="col-md-6">
		{{ Form::label('password') }}
		{{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password',$user->id ? '': 'required']) }}
        {!! $errors->first('password', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="col-md-6">
		{{ Form::label('confirm_password') }}
		{{ Form::password('confirm_password', ['class' => 'form-control' . ($errors->has('confirm_password') ? ' is-invalid' : ''), 'placeholder' => 'Confirm Password',$user->id ? '': 'required']) }}
        {!! $errors->first('confirm_password', '<p class="invalid-feedback">:message</p>') !!}
    </div>

    <div class="col-md-12">
		{{ Form::label('roles') }}
		{{ Form::select('roles[]', $roles, $user->roles, ['class' => 'form-control select2 form-select' . ($errors->has('roles') ? ' is-invalid' : ''), 'required','multiple']) }}
        {!! $errors->first('roles', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
    <button type="reset" class="btn btn-label-secondary">Reset</button>
</div>
@section('page-script')
<script>
    $(function() {
        const select2 = $('.select2');
        if (select2.length) {
            select2.each(function() {
                var $this = $(this);
                select2Focus($this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    placeholder: 'Select value',
                    dropdownParent: $this.parent()
                });
            });
        }
    });
</script>
@endsection
