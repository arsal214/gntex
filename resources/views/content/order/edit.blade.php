@extends('layouts.app')

@section('title')
    {{ __('Update') }} Category
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">
                {{ __('Update') }} Category
            </h5>
            <form class="card-body" method="POST" action="{{ route('categories.update', $category->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('content.order.form')

            </form>
        </div>

    </div>
@endsection
