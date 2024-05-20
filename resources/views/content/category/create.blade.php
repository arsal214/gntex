@extends('layouts.app')

@section('title')
    {{ __('Create') }} Category
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create') }} Category</h5>
            <form class="card-body" method="POST" action="{{ route('categories.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('content.category.form')

            </form>
        </div>

    </div>
@endsection
