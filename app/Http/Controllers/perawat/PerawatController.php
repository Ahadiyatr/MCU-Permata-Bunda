<?php

namespace App\Http\Controllers\perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function form()
  {
    return view('content.perawat.form-perawat');
  }
}
