<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.css" rel="stylesheet">
</head>
<body data-theme="lofi">
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-sm border-b">
        <div class="container mx-auto">
            <div class="flex-1">
                <a href="/" class="text-xl font-bold text-primary">🐦 Chirper</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 min-h-[calc(100vh-200px)]">
        @yield('content')
    </div>

    <!-- Footer dengan Nama & NIM (WAJIB) -->
    <footer class="footer footer-center bg-base-200 text-base-content p-6 border-t">
        <div>
            <p class="font-bold">Belajar Laravel - Chirper</p>
            <p>Built with Laravel & ❤️</p>
            <p class="text-primary font-semibold mt-2">
                Nama: [MHD ICHSAN FAQIH] (NIM: [230170188])
            </p>
        </div>
    </footer>
</body>
</html>