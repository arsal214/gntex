<div class="row g-4">
    <div class="form-group col-md-12">
        {{ Form::label('Size Name') }}
        {{ Form::text('name', $size->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Small']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('Quantity') }}
        {{ Form::text('qty', $size->qty, ['class' => 'form-control' . ($errors->has('qty') ? ' is-invalid' : ''), 'placeholder' => '6']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
