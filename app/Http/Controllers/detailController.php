<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail; 

class DetailController extends Controller
{
    // Implementasikan method atau constructor jika diperlukan

    // Contoh method untuk menampilkan detail
    public function show($id)
    {
        $detail = detail::findOrFail($id);

        return view('detail', ['detail' => $detail]);
    }
}