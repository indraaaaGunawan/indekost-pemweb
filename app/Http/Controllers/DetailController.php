<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of tQFhe resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = kamar::find($id);

        return view('detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $detail)
    {
        //
    }
}
