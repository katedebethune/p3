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
    	array('paragraph' => 'numeric|max:100')
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
	// Fetch all request data.
    $data = (Input::get('users'));
    
    //Create a new validator instance.
    $validator = Validator::make(
    	array('paragraph' => $data),	
    	array('paragraph' => 'numeric|min:5|max:100')
    );
    
    if ($validator->fails()) {
       return Redirect::to('/');
    }
    
    echo "Value of data is ".$data.'<br><br>';
	
	$faker = Faker::create();
	//echo $faker->name.'<br><br>';
	//echo $faker->date($format = 'Y-m-d', $max = 'now').'<br><br>';
	//echo $faker->text.'<br><br>';
	
	for ($i=0; $i < 10; $i++) {
  		echo $faker->name, "\n";
  		echo $faker->date($format = 'Y-m-d', $max = 'now')."\n";
		echo $faker->text."\n";
	}
	
	//return "GET paage for user-gen";
	return View::make('users');
	
});









