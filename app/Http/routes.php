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

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

// Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.
Route::get('/uppercase/{word}', 'HomeController@upperCase');

// Create a route at the path /increment that takes a parameter that is a number and returns the number plus one.
Route::get('/increment/{number?}', 'HomeController@increment');

// Create a route at the path /add that takes two parameters that are numbers and returns the sum of the numbers.
Route::get('/add/{a}/{b}', 'HomeController@add');

// Create a route that responds to a GET request on the path /rolldice.
// Within the route, return a random number between 1 and 6.
Route::get('/rolldice/{guess}', 'HomeController@rollDice');
