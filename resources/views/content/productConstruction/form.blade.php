<div class="row g-4">
    <div class="form-group col-md-12">
        {{ Form::label('Construction Status') }}
        {{ Form::text('name', $productConstruction->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'InProgress']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
