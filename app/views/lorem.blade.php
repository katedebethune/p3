@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<h2>How many paragraphs do you want?</h2>
	{{ Form::label('paragraphs', 'Paragraphs') }}
	{{ Form::text('paragraphs', '5') }}
	{{ Form::submit('Get my lorem!!') }}

@stop
