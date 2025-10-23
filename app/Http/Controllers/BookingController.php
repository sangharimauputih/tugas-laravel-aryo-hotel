<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // 🔹 Tampilkan daftar booking (opsional)
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('booking.index', compact('bookings'));
    }

    // 🔹 Tampilkan form buat booking
    public function create(Request $request)
    {
        // Ambil data dari query (dikirim via tombol “Pesan Sekarang”)
        $room = $request->get('room');
        $price = $request->get('price');

        // Kirim data ke view
        return view('booking.create', compact('room', 'price'));
    }

    // 🔹 Simpan booking baru
    public function store(Request $request)
    {
        $request->validate([
            'room' => 'required|string',
            'price' => 'required|numeric',
            'checkin_date' => 'required|date|after_or_equal:today',
            'checkout_date' => 'required|date|after:checkin_date',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'room' => $request->room,
            'price' => $request->price,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil!');
    }
}
