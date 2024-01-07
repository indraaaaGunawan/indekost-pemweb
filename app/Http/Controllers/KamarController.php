<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::orderBy('created_at', 'DESC')->get();
        return view('kamar/index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'gambar' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'deskripsi_kamar' => 'required',
        ]);
        $kamar = Kamar::create($request->all());

        $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
        $kamar->gambar = $request->file('gambar')->getClientOriginalName();
        $kamar->save();

        return redirect()->route('kamar')->with('success', 'Kamar Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        return view('kamar/show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        return view('kamar/edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kamar = Kamar::findOrFail($id);

        $request->validate([
            'tipe_kamar' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // pastikan validasi untuk gambar
            'status' => 'nullable',
            'harga' => 'nullable',
            'deskripsi_kamar' => 'nullable',
        ]);

        // Perbarui atribut-atribut selain gambar
        $kamar->tipe_kamar = $request->input('tipe_kamar');
        $kamar->status = $request->input('status');
        $kamar->harga = $request->input('harga');
        $kamar->deskripsi_kamar = $request->input('deskripsi_kamar');

        // Perbarui gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->move('images/', $gambar->getClientOriginalName());
            $kamar->gambar = $gambar->getClientOriginalName();
        }

        // Simpan perubahan pada model Kamar
        $kamar->save();

        return redirect()->route('kamar')->with('success', 'Kamar Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();

        return redirect()->route('kamar')->with('success', 'Kamar Berhasil Dihapus');
    }

    public function detailkamar(string $id)
    {
        $kamar = Kamar::findOrFail($id);

        return view('detail', compact('kamar'));
    }
}
