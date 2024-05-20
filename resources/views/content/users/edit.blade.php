@extends('layouts.app')

@section('title','Edit User')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{ route('users.index') }}" class="text-muted fw-light">Users /</a>
        <a href="{{ route('users.edit', $user->id) }}">{{ $user->first_name ?? '' }} {{ $user->last_name ?? '' }}</a>
    </h4>
    <div class="card mb-4">
		<div class="border-bottom card-header d-flex justify-content-between align-items-center">
            <h5 class="card-header">Edit User</h5>
			<a href="{{route('users.index')}}" class="btn btn-primary">Return Back</a>
        </div>
		<form class="card-body pt-3 formValidation" method="POST" enctype="multipart/form-data" action="{{ route('users.update',$user->id) }}">
			{{ method_field('PATCH') }}
			@csrf
			@include('content.users.form')
		</form>
	</div>
</div>
@endsection
