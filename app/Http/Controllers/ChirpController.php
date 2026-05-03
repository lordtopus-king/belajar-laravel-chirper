<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            "Hello, this is my first chirp! 🐦",
            "Belajar Laravel itu menyenangkan!",
            "Chirper siap di-deploy ke cloud! 🚀"
        ];
        
        return view('welcome', ['chirps' => $chirps]);
    }
}