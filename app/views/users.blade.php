@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	{{ "<h2>You requested ".$num_requested." fake users:</h2>" }}
	
	@foreach($fake_users as $fake_user)
		{{ $fake_user['name']."<br>".$fake_user['birthday']."<br>".$fake_user['profile']."<br><br>" }}
	@endforeach
	
	
@stop
