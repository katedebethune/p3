@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<h2>How many paragraphs do you want?</h2>
	{{ Form::open(array(
		'url' => '/lorem',
		'method' => 'GET'
	)) }}
	{{ Form::label('paragraphs', 'Paragraphs') }}
	{{ Form::text('paragraphs', '5') }}
	{{ Form::submit('Get my lorem!!') }}
	{{ Form::close() }}
@stop
