@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <img src="{{ $room->image ? asset('images/' . $room->image) : 'https://via.placeholder.com/600x400' }}" 
             class="card-img-top" alt="{{ $room->type }}">
        
        <div class="card-body text-center">
            <h2 class="card-title">{{ $room->type }}</h2>
            <p>{{ $room->description }}</p>

            <p><strong>Harga:</strong> Rp {{ number_format($room->price_per_night, 0, ',', '.') }} / malam</p>
            <p><strong>Status:</strong> 
                @if($room->is_available)
                    <span class="badge bg-success">Tersedia</span>
                @else
                    <span class="badge bg-danger">Penuh</span>
                @endif
            </p>

            @if($room->is_available)
                <a href="{{ route('book.create', $room->id) }}" class="btn btn-success btn-lg w-100">
                    Lanjut Pesan
                </a>
            @else
                <button class="btn btn-secondary btn-lg w-100" disabled>
                    Tidak Tersedia
                </button>
            @endif
        </div>
    </div>
</div>
@endsection
