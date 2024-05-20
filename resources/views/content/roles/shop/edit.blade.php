@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Survey
@endsection

@section('content')
    <section class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <a href="{{ route('roles.shop.index') }}" class="text-muted fw-light">Shop Role /</a>
            <a href="#">Edit</a>
        </h4>
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="border-bottom card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">{{ __('Update') }} Shop Roles</h5>
                        <a href="{{route('roles.shop.index')}}" class="btn btn-primary">Return Back</a>
                    </div>
                    <div class="card-body pt-3">
                        <form method="POST" class="formValidation" action="{{ route('roles.shop.update', $role->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('content.roles.shop.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
    <script src="{{ asset('theme/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script>
        const selectAll = document.querySelectorAll('.selectAll'),
            checkboxList = document.querySelectorAll('[type="checkbox"]');

        selectAll.forEach(element => {
            element.addEventListener('change', t => {
                checkboxList.forEach(e => {
                    e.checked = t.target.checked;
                });
            });
        });
        $(document).ready(function() {

            let formRepeater = $('.form-repeater');

            formRepeater.repeater({
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    if (confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                // isFirstItemUndeletable: true,
            });

        });
    </script>
@endsection
