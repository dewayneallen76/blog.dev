<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
  public function showWelcome()
  {
    return view('welcome');
  }

  public function upperCase($word)
  {
    $data['word'] = $word;
    $data['upperCaseWord'] = strtoupper($word);
    return view('uppercase', $data);
  }

  public function increment($number)
  {
    $message = '';
    if(is_numeric($number)) {
      $numberPlusOne = $number + 1;
    } else {
      $message = "Enter a number";
    }
    $data['message'] = $message;
    $data['number'] = $number;
    $data['numberPlusOne'] = $numberPlusOne;
    return view('increment', $data);
  }

  public function rollDice($guess)
  {
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
  }
  
}
