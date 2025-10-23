<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        // kirim data user yang sedang login ke view
        return view('user.dashboard', [
            'user' => Auth::user()
        ]);
    }
}
