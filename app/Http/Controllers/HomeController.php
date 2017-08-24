<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
  public function showWelcome()
  {
    return view('welcome');
  }

  public function sayHello($name)
  {
    return "Hey there, $name!";
  }

  public function upperCase($word)
  {
    $data['word'] = $word;
    $data['upperCaseWord'] = strtoupper($word);
    return view('uppercase', $data);
  }

  public function lowerCase($word)
  {
    $data['word'] = $word;
    $data['lowerCaseWord'] = strtolower($word);
    return view('lowercase', $data);
  }

  public function add($a, $b)
  {
    return $a + $b;
  }

  public function increment($number)
  {
    if(is_numeric($number)) {
      $number += 1;
    } else {
      $number = 1;
    }

    if($number > 5) {
      return redirect()->action('HomeController@resetToZero');
    }
    $data['number'] = $number;
    return view('increment', $data);
  }

  public function resetToZero()
  {
    $data['number'] = 0;
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
