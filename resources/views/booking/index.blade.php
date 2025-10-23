<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Pesanan - Solo Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h3 class="text-center mb-4">Daftar Pesanan</h3>
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
   <div class="mt-3 text-center">
        <a href="{{ route('user.dashboard') }}" class="btn btn-primary">← Kembali ke Beranda</a>
    </div>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Kamar</th>
        <th>Harga</th>
        <th>Check-In</th>
        <th>Check-Out</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $b)
        <tr>
          <td>{{ $b->name }}</td>
          <td>{{ $b->email }}</td>
          <td>{{ $b->room }}</td>
          <td>Rp{{ number_format($b->price, 0, ',', '.') }}</td>
          <td>{{ $b->check_in }}</td>
          <td>{{ $b->check_out }}</td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
</body>
</html>
