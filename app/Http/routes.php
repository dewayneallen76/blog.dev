<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name}', function ($name) {
  return "Hey there, $name!";
});

// Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.
Route::get('/uppercase/{string}', function($string) {
  return "Uppercased: " .strtoupper($string);
});

// Create a route at the path /increment that takes a parameter that is a number and returns the number plus one.
Route::get('/increment/{number?}', function ($number = 1) {
  if(is_numeric($number)) {
    return $number + 1;
  } else {
    return 1;
  }
});

// Create a route at the path /add that takes two parametes that are numbers and returns the sum of the numbers.
Route::get('/add/{a}/{b}', function ($a, $b) {
  return $a + $b;
});

// Create a route that responds to a GET request on the path /rolldice.
// Within the route, return a random number between 1 and 6.
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
Route::get('/rolldice/{guess}', function ($guess) {

  $dice = rand(1,6);

  if(!is_numeric($guess)) {
    $message = "Please enter a valid number!";
  } else if($guess == $dice){
    $message = "You guessed correctly! Well done!";
  } else {
    $message = "Try again!";
  }

  $data['guess'] = $guess;
  $data['message'] = $message;
  $data['dice'] = $dice;

  return view('rolldice', $data);
});
