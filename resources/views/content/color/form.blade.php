<div class="row g-4">
    <div class="form-group col-md-12">
        {{ Form::label('Color Name') }}
        {{ Form::text('name', $color->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Enter Color Name']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
