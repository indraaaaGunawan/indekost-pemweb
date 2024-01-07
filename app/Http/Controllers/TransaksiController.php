<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::orderBy('created_at', 'DESC')->get();
        return view('transaksi/index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'nama_pemesan' => $request->nama,
            'no_hp' => $request->nohp,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $request->harga,
        ]);

        $kamarById = Kamar::findOrFail($request->id_kamar);
        $kamarById->status = 'Tidak Tersedia';
        $kamarById->save();

        $kamar = Kamar::orderBy('created_at', 'DESC')->get();
        // return $request;
        // return with alert notification js
        return redirect()->route('home')->with('success', 'Booking Success!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

    public function home()
    {
        $kamar = Kamar::where('status', 'Tersedia')->orderBy('created_at', 'DESC')->get();


        // return $kamar;
        return view('home', compact('kamar'));
    }

    public function bookingRoom(Request $request, $id)
    {
        $kamar = Kamar::findOrFail($request->id);
        $user = Auth::user();

        // return $kamar;
        return view('booking', compact('kamar', 'user'));
    }
}
