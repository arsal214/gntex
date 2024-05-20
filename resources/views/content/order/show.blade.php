@extends('layouts.app')

@section('title')
    {{ $language->title ?? __('Show') . ' Language' }}
@endsection
@section('content')
    @php
        $buttonCheck = $source_string->every(function ($parentItem) {
            return $parentItem->translations->count() > 0;
        });
    @endphp
    <div class="container-xxl flex-grow-1 container-p-y">
        @includeif('partials.errors')
        <div class="card mb-4">
            <form action="{{ route('translations.store') }}" id="mainform" method="POST">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>{{ __('Create') }} Translation</h5>
                    <div>
                        <a href="{{route('languages.index')}}" class="btn btn-sm btn-warning">Return Back</a>
                        <button type="submit" class="btn btn-sm btn-primary {{ $buttonCheck ? 'disabled' : '' }}">
                            {{ __('Translate All') }}
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <input type="hidden" class="form-control" name="language_code" value="{{ $language->code }}">
                    <input type="hidden" class="form-control" name="language_id" value="{{ $language->id }}">
                    @foreach ($source_string as $index => $list)
                        <div class="row mb-2">
                            <input type="hidden" class="form-control" name="data[{{ $index }}][source_string_id]"
                                value="{{ $list->id }}">
                            <input type="hidden" class="form-control" name="data[{{ $index }}][id]"
                                value="{{ count($list->translations) > 0 ? $list->translations->value('id') : '' }}">
                            <div class="col-md-3">
                                <label>Key </label>
                                <input type="text" class="form-control" name="data[{{ $index }}][key]"
                                    value="{{ $list->key }}" readonly="readonly">
                            </div>
                            <div class="col-md-3">
                                <label>Text</label>
                                <input type="text" class="form-control" name="data[{{ $index }}][text]"
                                    value="{{ $list->text }}" readonly="readonly">
                            </div>
                            <div class="col-md-3">
                                <label>Translate</label>
                                <input type="text" class="form-control translate-text"
                                    name="data[{{ $index }}][translated_text]"
                                    value="{{ count($list->translations) > 0 ? $list->translations->value('translated_text') : '' }}"
                                    data-index="{{ $index }}">
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <button type="button" class="btn btn-primary individualSubmit w-100"
                                    data-index="{{ $index }}">{{ count($list->translations) > 0 && $list->translations->value('translated_text') ? 'Update' : 'Translate' }}</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        </div>

    </div>
@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
            $('.translate-text').on('input', function() {
                let index = $(this).data('index');
                let submitButton = $(`.individualSubmit[data-index="${index}"]`);
                submitButton.text($(this).val() === '' ? 'Translate' : 'Update');
            });
        });

        $(document).ready(function() {
            $('.individualSubmit').on('click', function() {
                $(this).addClass('disabled');
                var index = $(this).data('index');

                let source_string_id = $('input[name="data[' + index + '][source_string_id]"]');
                let id = $('input[name="data[' + index + '][id]"]');
                let text = $('input[name="data[' + index + '][text]"]');
                let language_code = $('input[name="language_code"]');
                let language_id = $('input[name="language_id"]');
                let translated_text = $('input[name="data[' + index + '][translated_text]"]');

                var formData = {
                    '_token': '{{ csrf_token() }}',
                    'source_string_id': source_string_id.val(),
                    'id': id.val(),
                    'text': text.val(),
                    'language_code': language_code.val(),
                    'language_id': language_id.val(),
                    'translated_text': translated_text.val(),
                };

                $.ajax({
                    url: '{{ route('update.single_translate') }}',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
                    success: function(data) {
                        if (data.success) {
                            translated_text.val(data.data.translated_text);
                            id.val(data.data.id);
                            toastr.success(data.message, 'Success');
                        } else {
                            toastr.error(data.message, 'Error');
                        }
                        $('.individualSubmit').removeClass('disabled');
                    },
                    error: function(error) {
                        toastr.error(error.message, 'Error');
                        // Handle error
                    }
                });
            });
        });
    </script>
@endsection
