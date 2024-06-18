<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreatorController extends Controller
{
    public function showKreatorPage()
    {
        return view('kreator-home');
    }
}
