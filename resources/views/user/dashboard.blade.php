<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard User - Solo Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fb;
      font-family: 'Poppins', sans-serif;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0066cc, #004080);
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
    }
    .navbar-brand, .navbar-text {
      color: white !important;
    }
    .btn-logout {
      background: #d9534f;
      border: none;
    }
    .btn-logout:hover {
      background: #c9302c;
    }

    /* Banner */
    .banner {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                  url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1600&q=80') center/cover;
      height: 330px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }
    .banner h1 {
      font-weight: 700;
      font-size: 2.5rem;
    }
    .banner p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    /* Kamar */
    .room-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease-in-out;
      background: white;
    }
    .room-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .room-card img {
      height: 220px;
      object-fit: cover;
      width: 100%;
    }
    .card-body h5 {
      font-weight: 600;
    }
    .price {
      color: #0066cc;
      font-weight: bold;
    }
    .btn-primary {
      background: #0066cc;
      border: none;
    }
    .btn-primary:hover {
      background: #004d99;
    }

    /* Footer */
    footer {
      background: #004080;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<!-- 🔹 Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Solo Hotel</a>
    <div class="ms-auto d-flex align-items-center">
      <span class="navbar-text me-3">Halo, {{ Auth::user()->name }}</span>
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-logout btn-sm">Logout</button>
      </form>
    </div>
  </div>
</nav>

<!-- 🔹 Banner -->
<section class="banner">
  <h1>Selamat Datang di Solo Hotel</h1>
  <p>Nikmati kenyamanan & kemewahan di jantung kota Solo</p>
</section>

<!-- 🔹 Daftar Kamar -->
<div class="container py-5">
  <h3 class="text-center mb-5 fw-bold">Daftar Kamar Tersedia</h3>

  <div class="row g-4 justify-content-center">

    <!-- Deluxe Room -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1576678927484-cc907957088c?auto=format&fit=crop&w=1000&q=80" alt="Deluxe Room">
        <div class="card-body text-center">
          <h5>Deluxe Room</h5>
          <p class="price">Rp400.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Deluxe Room', 'price' => 400000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Suite Room -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1000&q=80" alt="Suite Room">
        <div class="card-body text-center">
          <h5>Suite Room</h5>
          <p class="price">Rp800.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Suite Room', 'price' => 800000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Standard Room -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=1000&q=80" alt="Standard Room">
        <div class="card-body text-center">
          <h5>Standard Room</h5>
          <p class="price">Rp250.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Standard Room', 'price' => 250000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Family Room -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=80" alt="Family Room">
        <div class="card-body text-center">
          <h5>Family Room</h5>
          <p class="price">Rp600.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Family Room', 'price' => 600000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Executive Room -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=1000&q=80" alt="Executive Room">
        <div class="card-body text-center">
          <h5>Executive Room</h5>
          <p class="price">Rp1.200.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Executive Room', 'price' => 1200000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Presidential Suite -->
    <div class="col-md-4 col-sm-6">
      <div class="card room-card">
        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1000&q=80" alt="Presidential Suite">
        <div class="card-body text-center">
          <h5>Presidential Suite</h5>
          <p class="price">Rp2.500.000 / malam</p>
          <a href="{{ route('bookings.create', ['room' => 'Presidential Suite', 'price' => 2500000]) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <small>© 2025 Solo Hotel | Dirancang dengan ❤️ oleh Aryo Athaya Husnakhotami</small>
</footer>

</body>
</html>
