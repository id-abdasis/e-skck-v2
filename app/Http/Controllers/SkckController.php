<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkckController extends Controller
{
    public function pendaftaran()
    {
        return view('layouts.client-side.pendaftaran-skck');
    }
}
