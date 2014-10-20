<?php

/*
|--------------------------------------------------------------------------
| Application Routes - P3
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
	
});

Route::get('lorem', function()
{
	// Fetch all request data.
    $data = (Input::get('paragraphs'));
    
    //Create a new validator instance.
    $validator = Validator::make(
    	array('paragraph' => $data),	
    	array('paragraph' => 'numeric'),
    	array('paragraph' => 'between:5,99')
    );
    
    if ($validator->fails()) {
       return Redirect::to('/');
    }
    
    $generator = new Lorem();
	$chunks = $generator->getParagraphs($data);
    
	return View::make('lorem')
		->with('paragraphs', $data)
		->with('chunks', $chunks);
		
	
});

Route::get('users', function() 
{
	//return "GET paage for user-gen";
	return View::make('users');
	
	
});

Route::post('users', function() 
{
	return "POST page for user-gen";
});







