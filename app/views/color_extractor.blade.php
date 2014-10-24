@extends('_master')

@section('title')
	Color Extractor
@stop

<head>
	
</head>

@section('nav')
<nav>
		<ul>
			<li><a href='/'><-Back</a></li>
		</ul>
	</nav>

@stop

@section('content')

	<h2>Your color palette is:</h2>
		@foreach ($palette as $color)
    		{{-- <div class='box' style="color:".$color.";> --}}
    		<div class='box' style="background-color:{{ $color }};">
    			{{ $color }}
    		</div>
		@endforeach
	<br><br>
@stop
