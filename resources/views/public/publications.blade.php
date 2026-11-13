@extends('layouts.public')

@section('title', 'Publikasi | Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">TRANSPARANSI INFORMASI</span>
        <h1>Publikasi</h1>
        <p>Dokumen dan informasi resmi Koperasi Tunas Merdeka.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        @forelse($publications as $publication)
            <article class="content-box" style="margin-bottom:16px">
                <small class="eyebrow dark">
                    {{ $publication->document_type ?? 'DOKUMEN RESMI' }}
                </small>
                <h2>{{ $publication->title }}</h2>
                <p>{{ $publication->description }}</p>
                <small>
                    {{ $publication->published_at?->format('d M Y') }}
                </small>
                <br>
                <a class="text-link"
                   href="{{ asset('storage/' . $publication->document_path) }}"
                   target="_blank" rel="noopener">
                    Buka dokumen ↗
                </a>
            </article>
        @empty
            <div class="content-box">
                <h2>Belum ada publikasi.</h2>
                <p>Dokumen resmi yang telah disetujui akan ditampilkan di sini.</p>
            </div>
        @endforelse

        {{ $publications->links() }}
    </div>
</section>
@endsection
