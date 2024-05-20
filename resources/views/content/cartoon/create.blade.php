@extends('layouts.app')

@section('title')
    {{ __('Create') }} Cartoon
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create') }} Color</h5>
            <form class="card-body" method="POST" action="{{ route('cartoons.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('content.cartoon.form')

            </form>
        </div>

    </div>
@endsection
