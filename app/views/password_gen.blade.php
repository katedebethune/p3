@extends('_master')

@section('title')
	XKCD-password Generator
@stop

@section('nav')
<nav>
		<ul>
			<li><a href='/'>Back</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<h1>XKCD-style Password Generator</h1>

	<h2>Here is your randomly generated password</h2>
	
	{{ $pwd; }}
	
@stop
