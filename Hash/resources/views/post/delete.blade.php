@php /** @var $form Collective\Html\FormBuilder */ @endphp
@inject('form', 'Collective\Html\FormBuilder')
@extends('theme.base')
@section('title', 'Delete Post')
@section('content')

	<h2>
		Are you sure you want to delete this post?
	</h2>

	{{ $form->open(["autocomplete" => 'off'])}}

	@component("form.submit")
		@slot('form', $form)
		@slot('label', "Go Back")
	@endcomponent

	@component("form.submit")
		@slot('form', $form)
		@slot('label', "Delete")
	@endcomponent

	{{ $form->close() }}

@endsection
