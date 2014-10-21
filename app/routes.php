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
    $num_requested = (Input::get('users'));
    $fake_users = array(array());
    $val = 0;
    
    //Create a new validator instance.
    $validator = Validator::make(
    	array('users' => $num_requested),	
    	array('users' => 'numeric|min:5|max:100')
    );
    
    if ($validator->fails()) {
       return Redirect::to('/');
    }
    
    //echo "Value of data is ".$num_requested.'<br><br>';
	
	$faker = Faker::create();
	
    // fill the array
    for($j = 0; $j < $num_requested; $j++)
        {
        for($k = 0; $k < 3; $k++) 
        	if ( $k == 0 ) {
        		$fake_users[$j][$k] = $faker->name;
        	}
        	else if ( $k == 1 ) {
        		$fake_users[$j][$k] = $faker->date($format = 'Y-m-d', $max = 'now');
        	}
        	else {
        		$fake_users[$j][$k] = $faker->text;
        	}
        }
	/*   
    "<br/>------------------<br/>";
    // print the array  
    
    for($j = 0; $j < $num_requested; $j++)
        {
        for($k = 0; $k < 3; $k++) 
        echo $fake_users[$j][$k];
        echo "<br/>";
        }
    */

	
	//return "GET paage for user-gen";
	return View::make('users')
		->with('fake_users', $fake_users)
		->with('num_requested', $num_requested);
	
});


   











