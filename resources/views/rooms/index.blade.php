@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">🏨 Daftar Kamar Hotel</h2>
    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/'.$room->image) }}" class="card-img-top" alt="{{ $room->type }}">
                <div class="card-body text-center">
                    <h5>{{ $room->type }}</h5>
                    <p>{{ $room->description }}</p>
                    <p><strong>Rp {{ number_format($room->price_per_night, 0, ',', '.') }}</strong> / malam</p>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
