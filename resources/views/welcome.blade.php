<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebGIS - Dusun Dimajar 2</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-slate-900 text-slate-800 font-sans antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden">

    <!-- NAVBAR RESPONSIF -->
    <nav class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[92%] max-w-md md:max-w-xl transition-all duration-300">
        <div class="flex items-center justify-between bg-white/85 backdrop-blur-md rounded-full px-4 py-2.5 md:px-6 md:py-3 shadow-xl border border-white/40">

            <!-- Brand / Logo (Anti-terpotong di HP) -->
            <a href="/" class="text-sm md:text-lg font-bold text-slate-800 whitespace-nowrap shrink-0 flex items-center gap-1.5 hover:text-emerald-600 transition">
                <span class="text-base md:text-xl">🍃</span>
                <span>Dimajar 2</span>
            </a>

            <!-- Tombol Navigasi Peta -->
            <a href="/peta" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs md:text-sm font-semibold px-4 py-2 md:px-6 md:py-2.5 rounded-full transition duration-300 whitespace-nowrap shrink-0 shadow-md hover:shadow-emerald-500/30 flex items-center gap-1.5">
                <span>Peta Interaktif</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 md:h-4 md:w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>

        </div>
    </nav>

    <!-- WRAPPER HERO SECTION -->
<section class="relative min-h-screen flex flex-col items-center justify-center text-center px-4 sm:px-6 pt-24 pb-16 overflow-hidden">

    <!-- 1. BACKGROUND IMAGE IMPROVED (Agar Tidak Terlalu Zoom di HP) -->
    <!-- Ganti URL src di bawah dengan jalur gambar latar belakang Anda -->
    <img src="/jalur-gambar-latar-anda.jpg"
         alt="Background Dimajar"
         class="absolute inset-0 w-full h-full object-cover object-center md:object-cover sm:scale-100 scale-105 transition-all duration-500 z-0" />

    <!-- Overlay Putih/Gradasi agar teks tetap terbaca jelas di atas gambar -->
    <div class="absolute inset-0 bg-white/70 sm:bg-white/50 backdrop-blur-[2px] z-1"></div>

    <!-- 2. NAVBAR RESPONSIF (Anti-Terpotong) -->
    <nav class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[92%] max-w-md md:max-w-xl">
        <div class="flex items-center justify-between bg-white/85 backdrop-blur-md rounded-full px-4 py-2.5 md:px-6 md:py-3 shadow-lg border border-white/40">

            <!-- Logo (Ditambahkan whitespace-nowrap & shrink-0 agar angka '2' tidak turun) -->
            <a href="/" class="text-sm sm:text-base md:text-lg font-bold text-slate-800 whitespace-nowrap shrink-0 flex items-center gap-1.5">
                <span>🍃</span>
                <span>Dimajar 2</span>
            </a>

            <!-- Tombol Peta -->
            <a href="/peta" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs md:text-sm font-semibold px-4 py-2 md:px-5 md:py-2.5 rounded-full transition whitespace-nowrap shrink-0 shadow-md">
                Peta Interaktif
            </a>

        </div>
    </nav>

    <!-- 3. KONTEN TEKS & TOMBOL CTA -->
    <div class="relative z-10 max-w-lg md:max-w-2xl mx-auto flex flex-col items-center mt-6">

        <!-- Badge Lokasi -->
        <div class="inline-flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs md:text-sm font-semibold text-emerald-800 shadow-sm mb-6 border border-white/60 whitespace-nowrap">
            <span>📍</span>
            <span>SUMBERARUM, TEMPURAN</span>
        </div>

        <!-- Judul -->
        <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-slate-800 tracking-tight leading-tight mb-4">
            Selamat Datang di <br>
            <span class="text-emerald-600">Dusun Dimajar 2</span>
        </h1>

        <!-- Deskripsi -->
        <p class="text-xs sm:text-sm md:text-base text-slate-700 max-w-md md:max-w-lg mb-8 leading-relaxed px-2">
            Sebuah dusun asri di Kelurahan Sumberarum. Temukan potensi lokal, keragaman demografi, dan infrastruktur wilayah melalui eksplorasi pemetaan spasial interaktif kami yang modern.
        </p>

        <!-- Tombol Jelajahi -->
        <a href="/peta" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm md:text-base px-7 py-3.5 rounded-full shadow-lg transition duration-300 transform hover:-translate-y-0.5">
            <span>Jelajahi Melalui Peta Interaktif</span>
            <span>🚀</span>
        </a>

    </div>
</section>

</body>
</html>
