<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('booking.index', compact('booking'));
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'booking_date' => 'required|date',
            // Tambahkan validasi untuk kolom-kolom lain
        ]);

        Booking::create($request->all());

        return redirect()->route('booking.index')->with('success', 'Pemesanan berhasil dibuat');
    }

    public function edit(Booking $booking)
    {
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required',
            'booking_date' => 'required|date',
            // Tambahkan validasi untuk kolom-kolom lain
        ]);

        $booking->update($request->all());

        return redirect()->route('booking.index')->with('success', 'Pemesanan berhasil diperbarui');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Pemesanan berhasil dihapus');
    }

}

