<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index () {
      return view('content.mcu.index');
    }

    public function show () {
      return view('content.mcu.show');
    }

    public function showriwayat () {
      return view('content.mcu.show-riwayat');
    }

    public function showfisik ()
    {
      return view('content.mcu.show-fisik');
    }

    public function create ()
    {
      return view('content.mcu.add-record');
    }

    public function details ()
    {
      $pageConfigs = ['myLayout' => 'blank'];
      return view('content.mcu.details-mcu', ['pageConfigs' => $pageConfigs]);
    }
}
