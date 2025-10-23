<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Solo Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

<div class="card p-4 shadow" style="width: 400px;">
  <h4 class="text-center mb-3">Register</h4>

  <form method="POST" action="{{ route('register.post') }}">
    @csrf
    <div class="mb-3">
      <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
    </div>
    <div class="mb-3">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="mb-3">
      <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Daftar</button>
  </form>

  <p class="text-center mt-3">
    Sudah punya akun? <a href="{{ route('login') }}">Login</a>
  </p>
</div>

</body>
</html>
