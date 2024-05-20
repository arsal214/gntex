@extends('layouts.app')

@section('title')
    {{ __('Create') }} Packing
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create') }} Packing</h5>
            <form class="card-body" method="POST" action="{{ route('packings.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('content.packing.form')

            </form>
        </div>

    </div>
@endsection
