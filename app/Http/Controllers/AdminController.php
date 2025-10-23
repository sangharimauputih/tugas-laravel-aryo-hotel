<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // tampilkan semua user (misalnya buat daftar pengguna)
        $users = User::all();

        return view('admin.dashboard', [
            'admin' => Auth::user(),
            'users' => $users
        ]);
    }
}
