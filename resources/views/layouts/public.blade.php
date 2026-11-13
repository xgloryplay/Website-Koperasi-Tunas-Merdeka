<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koperasi Tunas Merdeka. Bertumbuh Bersama, Sejahtera Bersama.">
    <meta name="theme-color" content="#103D2B">
    <title>@yield('title', 'Koperasi Tunas Merdeka')</title>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
<header class="header">
    <div class="container nav">
        <a href="/" class="brand">
            <span class="brand-symbol">TM</span>
            <span><b>KOPERASI</b><small>TUNAS MERDEKA</small></span>
        </a>
        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang Kami</a>
            <a href="/produk-layanan">Produk & Layanan</a>
            <a href="/keanggotaan">Keanggotaan</a>
            <a href="/berita">Berita</a>
            <a href="/publikasi">Publikasi</a>
            <a href="/kontak">Kontak</a>
        </nav>
        <a class="nav-cta" href="/login">Portal Anggota ↗</a>
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
            <a href="/tentang">Tentang Kami</a>
            <a href="/produk-layanan">Produk & Layanan</a>
            <a href="/keanggotaan">Keanggotaan</a>
        </div>
        <div>
            <b>Informasi</b>
            <a href="/berita">Berita</a>
            <a href="/publikasi">Publikasi</a>
            <a href="/kontak">Kontak</a>
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