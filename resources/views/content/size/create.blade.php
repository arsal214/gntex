@extends('layouts.app')

@section('title')
    {{ __('Create') }} Size
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create') }} Size</h5>
            <form class="card-body" method="POST" action="{{ route('sizes.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('content.size.form')

            </form>
        </div>

    </div>
@endsection
