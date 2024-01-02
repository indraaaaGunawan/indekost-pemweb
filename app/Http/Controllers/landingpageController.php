<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class landingpageController extends Controller
    {
        public function landingpage()
    {
        // Logika untuk tampilan landing page di sini
        return view('landingpage');
    }
    }