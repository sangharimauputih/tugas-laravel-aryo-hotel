<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Kamar - Solo Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Form Pemesanan Kamar</h3>

        <form method="POST" action="{{ route('bookings.store') }}">
            @csrf
            <div class="mb-3">
                <label for="room" class="form-label">Tipe Kamar</label>
                <input type="text" id="room" name="room" class="form-control" value="{{ $room }}" readonly>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga / malam</label>
                <input type="text" id="price" name="price" class="form-control" value="Rp{{ number_format($price, 0, ',', '.') }}" readonly>
                <input type="hidden" name="price" value="{{ $price }}">
            </div>

            <div class="mb-3">
                <label for="checkin_date" class="form-label">Tanggal Check-In</label>
                <input type="date" id="checkin_date" name="checkin_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="checkout_date" class="form-label">Tanggal Check-Out</label>
                <input type="date" id="checkout_date" name="checkout_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Konfirmasi Pesanan</button>
        </form>
    </div>
</div>

</body>
</html>
