@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h3 class="text-center mb-4">✏️ Edit Booking</h3>

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" value="{{ $booking->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $booking->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Check-in</label>
            <input type="date" name="check_in" value="{{ $booking->check_in }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Check-out</label>
            <input type="date" name="check_out" value="{{ $booking->check_out }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
    </form>
</div>
@endsection
