<div class="row g-4">
    <div class="form-group col-md-6">
        {{ Form::label('Supplier PO ID') }}
        {{ Form::text('po_id', $supplier->po_id, ['class' => 'form-control' . ($errors->has('po_id') ? ' is-invalid' : ''), 'placeholder' => 'S-01']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('Supplier Name') }}
        {{ Form::text('name', $supplier->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'XYZ']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="row g-4">
    <div class="form-group col-md-4">
        {{ Form::label('Email') }}
        {{ Form::email('email', $supplier->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'xyz@gmail.com']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('Company Name') }}
        {{ Form::text('company_name', $supplier->company_name, ['class' => 'form-control' . ($errors->has('company_name') ? ' is-invalid' : ''), 'placeholder' => 'XYZ']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('Phone Number') }}
        {{ Form::text('phone_number', $supplier->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => '12345']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
