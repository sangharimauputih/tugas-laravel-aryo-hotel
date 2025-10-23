<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f8f9fa; }
        .navbar { background-color: #0d6efd; }
        .navbar-brand, .nav-link { color: white !important; }
    </style>
</head>
<body>

@if(session('success'))
    <div class="alert alert-success text-center mt-3 mx-3">
        {{ session('success') }}
    </div>
@endif

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">🏨 Hotel Reservation</a>
        <a class="nav-link" href="{{ route('bookings.index') }}">📋 Data Booking</a>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
