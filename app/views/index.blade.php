@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	{{ "Get me some lorem" }}
	{{ "Get me some fake users" }}
	@{{ HTML::linkRoute('lorem') }}
	@{{ HTML::linkRoute('users') }}
@stop
