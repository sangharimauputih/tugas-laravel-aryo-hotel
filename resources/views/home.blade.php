<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hotel Riyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center mt-5">
    <div class="container">
        <h1 class="mb-4">🏨 Selamat Datang di Hotel Riyo</h1>

        @auth
            <p>Halo, <strong>{{ Auth::user()->name }}</strong></p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn btn-primary mt-3">Ke Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-success">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        @endauth
    </div>
</body>
</html>
