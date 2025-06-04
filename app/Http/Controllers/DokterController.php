<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function create()
  {
    return view('content.dokter.form-dokter');
  }
}
