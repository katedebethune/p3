<?php

/*
|--------------------------------------------------------------------------
| Application Routes
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
	//return "Index page for Developer's Best Friend";
});

Route::get('lorem', function()
{
	return View::make('lorem');
	//return "GET page for lorem";
});

Route::post('lorem', function()
{
	return "POST page for lorem";
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





