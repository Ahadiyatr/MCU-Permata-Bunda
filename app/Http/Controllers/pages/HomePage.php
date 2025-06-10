<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePage extends Controller
{
  public function index()
  {
    return view('content.pages.pages-home');
  }

  public function homePt()
  {
    return view('content.pages.pages-home-pt');

  }

  public function pencarian()
  {
    return view('content.pencarian.index');
  }
}
