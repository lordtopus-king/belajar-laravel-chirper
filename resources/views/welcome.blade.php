@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="max-w-3xl mx-auto">
    <!-- Welcome Card -->
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body text-center">
            <!-- Icon -->
            <div class="flex justify-center mb-4">
                <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center">
                    <svg class="w-10 h-10 text-primary-content" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
            </div>
            
            <h1 class="text-4xl font-bold">Welcome to Chirper!</h1>
            
            <p class="py-4 text-base-content/70 text-lg">
                This is your brand new Laravel application.<br>
                Time to make it <span class="text-primary font-semibold">sing (or chirp)!</span>
            </p>
            
            <div class="flex gap-4 justify-center mt-2">
                <button class="btn btn-primary">Get Started 🚀</button>
                <button class="btn btn-outline">Documentation 📖</button>
            </div>
            <!-- Tambahkan di bawah tombol, sebelum tag penutup card-body -->

@isset($chirps)
<div class="mt-8 text-left border-t pt-6">
    <h2 class="text-2xl font-bold mb-4">📢 Latest Chirps:</h2>
    @foreach($chirps as $chirp)
        <div class="alert alert-success shadow-lg mb-3">
            <div>
                <span>🐦</span>
                <span>{{ $chirp }}</span>
            </div>
        </div>
    @endforeach
</div>
@endisset
        </div>
    </div>

    <!-- Features -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
        <div class="card bg-base-100 shadow-md">
            <div class="card-body items-center text-center">
                <div class="text-4xl">⚡</div>
                <h2 class="card-title">Fast Development</h2>
                <p class="text-sm">Build amazing applications with Laravel</p>
            </div>
        </div>
        <div class="card bg-base-100 shadow-md">
            <div class="card-body items-center text-center">
                <div class="text-4xl">🛡️</div>
                <h2 class="card-title">Secure by Default</h2>
                <p class="text-sm">Built-in security features</p>
            </div>
        </div>
        <div class="card bg-base-100 shadow-md">
            <div class="card-body items-center text-center">
                <div class="text-4xl">🐦</div>
                <h2 class="card-title">Chirp Away!</h2>
                <p class="text-sm">Create and share with community</p>
            </div>
        </div>
    </div>
</div>
@endsection