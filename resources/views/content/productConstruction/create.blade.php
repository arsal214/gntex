@extends('layouts.app')

@section('title')
    {{ __('Create') }} Product Construction
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create') }} Product Construction</h5>
            <form class="card-body" method="POST" action="{{ route('product-constructions.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('content.productConstruction.form')

            </form>
        </div>

    </div>
@endsection
