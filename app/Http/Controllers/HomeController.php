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

}
