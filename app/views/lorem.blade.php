@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Text</h1>

	<h2>You requested  {{{ $paragraphs }}} paragraphs of Lorem Ipsum text.</h2>
	
	{{ implode('<p>', $chunks).'<br><br>'; }}
	
@stop
