<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\landingpage;

class landingpageController extends Controller
{
    public function landingpage()
    {
        // Logika untuk tampilan landing page di sini
        return view('layout.landingpage');
    }
}
