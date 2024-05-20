<div class="row g-4">
    <div class="form-group col-md-6">
        {{ Form::label('Cartoon Name') }}
        {{ Form::text('name', $cartoon->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Small']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('No. Of Pcs Per Carton') }}
        {{ Form::number('pcs_per_cartoon', $cartoon->pcs_per_cartoon, ['class' => 'form-control' . ($errors->has('pcs_per_cartoon') ? ' is-invalid' : ''), 'placeholder' => '6']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
