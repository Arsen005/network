@extends('template.basic.default')

@if ( Auth::check() )

	@section('page_title')
		Social Network
	@stop

	@section('aside')
		@include('template.left')
	@stop

	@section('content')
		@include('template.content')
	@stop

@else

	@section('page_title')
		Регистрация и авторизация
	@stop

	@section('aside')
		@include('template.not_authed.left')
	@stop

	@section('content')
		@include('template.not_authed.content')
	@stop

@endif