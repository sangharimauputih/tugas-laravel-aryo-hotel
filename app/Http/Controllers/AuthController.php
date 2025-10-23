<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 🔹 Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // 🔹 Tampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 🔹 Proses register user baru
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // buat user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user'; // default role = user
        $user->save();

        Auth::login($user);

        // redirect langsung ke dashboard user
        return redirect()->route('user.dashboard');
    }

    // 🔹 Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Pastikan role diambil dengan benar
            $role = strtolower($user->role);

            // Redirect berdasarkan role
            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                // kalau role aneh (tidak dikenal)
                Auth::logout();
                return redirect('/login')->withErrors([
                    'role' => 'Role tidak dikenali, hubungi admin sistem.'
                ]);
            }
        }

        // kalau gagal login
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // 🔹 Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
