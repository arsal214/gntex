<div class="row g-4">
    <div class="form-group col-md-6">
        {{ Form::label('PO ID') }}
        {{ Form::text('po_id', $order->po_id, ['class' => 'form-control' . ($errors->has('po_id') ? ' is-invalid' : ''), 'readonly']) }}
        {!! $errors->first('po_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group col-md-6">
            {{ Form::label('Suppliers') }}
            {{ Form::select('supplier_id', ['' => 'Select Supplier'] + $suppliers->toArray(), $order->supplier_id, ['class' => 'form-control select2' . ($errors->has('supplier_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('supplier_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>

</div>


<div class="row g-4 mt-1">
    <div class="form-group col-md-6">
        {{ Form::label('Product Descriptions') }}
        {{ Form::text('product_descriptions', $order->product_descriptions, ['class' => 'form-control' . ($errors->has('product_descriptions') ? ' is-invalid' : '')]) }}
        {!! $errors->first('product_descriptions', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group col-md-6">
            {{ Form::label('Order Category') }}
            {{ Form::select('category_id', ['' => 'Select Option'] + $categories->toArray(), $order->category_id, ['class' => 'form-control select2' . ($errors->has('category_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('category_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>

</div>

<div class="row g-4 mt-1">
    <div class="form-group col-md-6">
            {{ Form::label('Cartoon') }}
            {{ Form::select('pcs_per_carton_id', ['' => 'Select Option'] + $cartoons->toArray(), $order->pcs_per_carton_id, ['class' => 'form-control select2' . ($errors->has('pcs_per_carton_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('pcs_per_carton_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('No.Of Cartoons') }}
        {{ Form::number('no_cartoon', $order->no_cartoon, ['class' => 'form-control' . ($errors->has('no_cartoon') ? ' is-invalid' : '')]) }}
        {!! $errors->first('no_cartoon', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>

<div class="row g-4 mt-1">
    <div class="form-group col-md-6">
        {{ Form::label('Color') }}
        {{ Form::select('color_id', ['' => 'Select Option'] + $colors->toArray(), $order->color_id, ['class' => 'form-control select2' . ($errors->has('color_id') ? ' is-invalid' : ''), 'required']) }}
        {!! $errors->first('color_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('Size') }}
        {{ Form::select('size_id', ['' => 'Select Option'] + $sizes->toArray(), $order->size_id, ['class' => 'form-control select2' . ($errors->has('size_id') ? ' is-invalid' : ''), 'required']) }}
        {!! $errors->first('size_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>


</div>

<div class="row g-4 mt-1">
    <div class="form-group col-md-4">
            {{ Form::label('Order Packing') }}
            {{ Form::select('packing_id', ['' => 'Select Option'] + $packings->toArray(), $order->packing_id, ['class' => 'form-control select2' . ($errors->has('packing_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('packing_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group col-md-4">
            {{ Form::label('Order Product Construction') }}
            {{ Form::select('product_construction_id', ['' => 'Select Option'] + $constructions->toArray(), $order->product_construction_id, ['class' => 'form-control select2' . ($errors->has('product_construction_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('product_construction_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('Marking') }}
        {{ Form::text('marking', $order->marking, ['class' => 'form-control' . ($errors->has('marking') ? ' is-invalid' : '')]) }}
        {!! $errors->first('marking', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>



{{--<select name="status" id="status" class="form-control select2">--}}
{{--    <option value="Active" {{ $integration->status == 'Active' ? 'selected' : '' }}>Active--}}
{{--    </option>--}}
{{--    <option value="InActive" {{ $integration->status == 'InActive' ? 'selected' : '' }}>--}}
{{--        De-Active--}}
{{--    </option>--}}
{{--</select>--}}


{{--<div class="col-12">--}}
{{--    {{ Form::label('Integration Category') }}--}}
{{--    {{ Form::select('integration_category_id', $integration_categories, $integration->integration_category_id, ['class' => 'form-control select2' . ($errors->has('integration_category_id') ? ' is-invalid' : ''), 'required']) }}--}}
{{--    {!! $errors->first('integration_category_id', '<p class="invalid-feedback">:message</p>') !!}--}}
{{--</div>--}}


<div class="pt-4">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
