<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisPasien extends Controller
{

    public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.pasien.form-karyawan', ['pageConfigs' => $pageConfigs]);
  }
    public function form2()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.pasien.form2-karyawan', ['pageConfigs' => $pageConfigs]);
  }

  public function persetujuan()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.pasien.persetujuan', ['pageConfigs' => $pageConfigs]);
  }
}
