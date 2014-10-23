@extends('_master')

@section('title')
	Color Extractor
@stop

<head>
	
</head>

@section('nav')
<nav>
		<ul>
			<li><a href='/'>Back</a></li>
		</ul>
	</nav>

@stop

@section('content')
	<h1>Color Extractor</h1>

	<h2>Your color palette is:</h2>
	{{-- HTML::decode(Form::button('<i class="icon-ok"></i> Save', array('class'=>'btn btn-success'))) --}}
		@foreach ($palette as $color)
    		{{-- <div class='box' style="color:".$color.";> --}}
    		<div class='box' style="background-color:{{ $color }};">
    			{{ $color }}
    		</div>
		@endforeach
	<br>
	
	
	
@stop
