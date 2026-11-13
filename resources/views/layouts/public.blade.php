<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koperasi Tunas Merdeka. Bertumbuh Bersama, Sejahtera Bersama.">
    <meta name="theme-color" content="#103D2B">
    <title>@yield('title', 'Koperasi Tunas Merdeka')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="header">
    <div class="container nav">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-symbol">TM</span>
            <span><b>KOPERASI</b><small>TUNAS MERDEKA</small></span>
        </a>

        <button class="mobile-menu-toggle" type="button" aria-controls="primary-navigation"
                aria-expanded="false" aria-label="Buka menu navigasi">
            <span></span><span></span><span></span>
        </button>

        <nav class="nav-links" id="primary-navigation" aria-label="Navigasi utama">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('about') }}">Tentang Kami</a>
            <a href="{{ route('services') }}">Produk & Layanan</a>
            <a href="{{ route('membership') }}">Keanggotaan</a>
            <a href="{{ route('news') }}">Berita</a>
            <a href="{{ route('publications') }}">Publikasi</a>
            <a class="mobile-contact-link" href="{{ route('contact') }}">Kontak</a>
        </nav>

        <a class="nav-cta" href="{{ route('membership') }}">Portal Anggota ↗</a>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-grid">
        <div>
            <div class="brand footer-brand">
                <span class="brand-symbol">TM</span>
                <span><b>KOPERASI</b><small>TUNAS MERDEKA</small></span>
            </div>
            <p>Bertumbuh Bersama, Sejahtera Bersama.</p>
        </div>
        <div>
            <b>Jelajahi</b>
            <a href="{{ route('about') }}">Tentang Kami</a>
            <a href="{{ route('services') }}">Produk & Layanan</a>
            <a href="{{ route('membership') }}">Keanggotaan</a>
        </div>
        <div>
            <b>Informasi</b>
            <a href="{{ route('news') }}">Berita</a>
            <a href="{{ route('publications') }}">Publikasi</a>
            <a href="{{ route('contact') }}">Kontak</a>
        </div>
        <div>
            <b>Teknologi</b>
            <p>Digital platform by Satu Proyeksi.</p>
        </div>
    </div>
    <div class="container copyright">
        <span>© {{ date('Y') }} Koperasi Tunas Merdeka</span>
        <span>All rights reserved.</span>
    </div>
</footer>
</body>
</html>
