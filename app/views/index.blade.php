@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	
	
	
	<h3>Lorem Ipsum Generator</h3>
	<p>How many paragraphs do you want? (1 to 99)</p>
	{{ Form::open(array(
		'url' => '/lorem',
		'method' => 'GET'
	)) }}
	{{ Form::label('paragraphs', 'Paragraphs') }}
	{{ Form::text('paragraphs', '5', array('class' => 'resizedTextbox')) }}
	<br>
	{{ Form::submit('Get my lorem!!') }}
	{{ Form::close() }}
	
	<h3>Random User Generator</h3>
	<p>How many random users do you want? Select from 5 to 99 fake users, with optional birthdates and profiles.</p>
	{{ Form::open(array(
		'url' => '/users',
		'method' => 'GET'
	)) }}

	{{ Form::label('users', 'Users') }}
	{{ Form::text('users', '5', array('class' => 'resizedTextbox')) }}
	{{ Form::label('birthday', 'Birthday?') }}
	{{ Form::select('birthday', array('1' => 'yes', '0' => 'no'), '1') }}
	{{ Form::label('profile', 'Profile?') }}
	{{ Form::select('profile', array('1' => 'yes', '0' => 'no'), '1') }}
	<br>
	{{ Form::submit('Get my users!!') }}

	{{ Form::close() }}
	
	<h3>Color Extractor</h3>
	<p>Provides a color palette from any png image (outputs up to 5 colors).</p>
	{{ Form::open(array('url'=>'color_extractor','files'=>true)) }}
	
	<ul class="errors">
    @foreach($errors->all('<li>:message</li>') as $message)
        {{ $message }}
    @endforeach
    </ul>
  
  	{{ Form::label('file','Get a palette from your png image') }}
  	{{ Form::file('file','',array('id'=>'','class'=>'')) }}
  	<br/>
  	<!-- submit buttons -->
  	{{ Form::submit('Get my colors!!') }}
  
  	<!-- reset buttons -->
  	{{ Form::reset('Reset') }}
  
  	{{ Form::close() }}
  
  <h3>XKCD-style Password Generator</h3>
  <p>Generate a random, multi-word password. Select from 3 to 8 words, with optional symbol, digit, or leading cap.</p>
  {{ Form::open(array(
		'url' => '/password_gen',
		'method' => 'GET'
	)) }}

	{{ Form::label('num_words', 'Number of Words') }}
	{{ Form::text('num_words', '3', array('class' => 'resizedTextbox')) }}
	
	{{ Form::label('symbol', 'Add a symbol?') }}
	{{ Form::select('symbol', array('1' => 'yes', '0' => 'no'), '1')}}
	<br>
	{{ Form::label('digit', 'Add a number?') }}
	{{ Form::select('digit', array('1' => 'yes', '0' => 'no'), '1') }}
	
	{{ Form::label('cap', 'Capitalize first letter?') }}
	{{ Form::select('cap',array('1' => 'yes', '0' => 'no'), '1')}}
	
	<br>
	
	{{ Form::submit('Get my password!!') }}

{{ Form::close() }}
	
	
@stop


 




