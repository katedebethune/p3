@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	<h2>How many users do you want?</h2>

	{{ Form::open(array(
		'url' => '/users',
		'method' => 'GET'
	)) }}

	{{ Form::label('users', 'Users') }}
	{{ Form::text('paragraphs', '5') }}
	{{ Form::label('birthday', 'Birthday?') }}
	{{ Form::checkbox('birthday', '0', false) }}
	{{ Form::label('profile', 'Profile?') }}
	{{ Form::checkbox('profile', '0', false) }}
	{{ Form::submit('Get my users!!') }}

	{{ Form::close() }}

@stop
