<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Redirect berdasarkan role
        if ($user->isPPKHA()) {
            return redirect()->route('ppkha.dashboard');
        } elseif ($user->isMahasiswa()) {
            return redirect()->route('mahasiswa.dashboard');
        } elseif ($user->isDosen()) {
            return redirect()->route('dosen.dashboard');
        } elseif ($user->isLulusan()) {
            return redirect()->route('lulusan.dashboard');
        }

        // Fallback ke dashboard umum
        return view('dashboard');
    }
}