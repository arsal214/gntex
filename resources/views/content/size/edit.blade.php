@extends('layouts.app')

@section('title')
    {{ __('Update') }} Color
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">
                {{ __('Update') }} Color
            </h5>
            <form class="card-body" method="POST" action="{{ route('sizes.update', $size->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('content.size.form')

            </form>
        </div>

    </div>
@endsection
