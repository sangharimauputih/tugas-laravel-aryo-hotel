<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function admin()
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return redirect('/login');
        }
        return view('admin.dashboard', compact('user'));
    }

    public function user()
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'user') {
            return redirect('/login');
        }
        return view('user.dashboard', compact('user'));
    }
}
