<div class="row g-4">
    <div class="form-group col-md-6">
        {{ Form::label('Packing Name') }}
        {{ Form::text('name', $packing->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Plastic']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('Packing Type') }}
        {{ Form::text('packing_type', $packing->packing_type, ['class' => 'form-control' . ($errors->has('packing_type') ? ' is-invalid' : ''), 'placeholder' => 'wraping']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
