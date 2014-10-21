@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	{{ "<h2>You requested ".$num_requested." fake users:</h2>" }}

	{{ "<br>" }}
	
	@foreach($fake_users as $fake_user)
		{{ $fake_user[0]."<br>".$fake_user[1]."<br>".$fake_user[2]."<br><br>" }}
	@endforeach

@stop
