@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	
	
	<h2>Lorem Ipsum Generator</h2>
	<h3>How many paragraphs do you want?</h3>
	{{ Form::open(array(
		'url' => '/lorem',
		'method' => 'GET'
	)) }}
	{{ Form::label('paragraphs', 'Paragraphs') }}
	{{ Form::text('paragraphs', '5') }}
	{{ Form::submit('Get my lorem!!') }}
	{{ Form::close() }}
	
	<h2>Random User Generator</h2>
	<h3>How many random users do you want?</h3>
	{{ Form::open(array(
		'url' => '/users',
		'method' => 'GET'
	)) }}

	{{ Form::label('users', 'Users') }}
	{{ Form::text('users', '5') }}
	{{ Form::label('birthday', 'Birthday?') }}
	{{ Form::select('birthday', array('1' => 'yes', '0' => 'no'), '1') }}
	{{ Form::label('profile', 'Profile?') }}
	{{ Form::select('profile', array('1' => 'yes', '0' => 'no'), '1') }}
	{{ Form::submit('Get my users!!') }}

	{{ Form::close() }}
@stop




