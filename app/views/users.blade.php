@extends('_master')

@section('title')
	Random User Generator
@stop

@section('nav')
<nav>
		<ul>
			<li><a href='/'>Back</a></li>
		</ul>
	</nav>
@stop

@section('content')
	{{ "<h2>You requested ".$num_requested." fake users:</h2>" }}
	
	@foreach($fake_users as $fake_user)
		<div class="names">
		{{ $fake_user['name']."<br>" }}
		</div>
		
		@if ( $fake_user['birthday'] != NULL )
			{{ $fake_user['birthday']."<br>" }}
		@endif
		
		@if ( $fake_user['profile'] != NULL )
			{{ $fake_user['profile']."<br>" }}
		@endif
		
		{{ "<br>" }}
		
	@endforeach
	
	
	
@stop
