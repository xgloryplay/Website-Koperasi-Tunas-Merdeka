@extends('layouts.public')

@section('title', $title . ' — Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">KOPERASI TUNAS MERDEKA / INFORMASI</span>
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
        <a class="text-link" href="{{ route('home') }}">← Kembali ke Beranda</a>
    </div>
</section>
<section class="section-pad page-content">
    <div class="container">
        <div class="content-placeholder">
            <span class="placeholder-icon">✳</span>
            <h2>Informasi sedang disiapkan.</h2>
            <p>Konten halaman ini akan dikembangkan menggunakan data dan dokumen resmi Koperasi Tunas Merdeka.</p>
        </div>
    </div>
</section>
@endsection
