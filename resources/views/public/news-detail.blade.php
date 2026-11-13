@extends('layouts.public')

@section('title', $post->title . ' | Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">BERITA KOPERASI</span>
        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->category?->name ?? 'Informasi' }}
            · {{ $post->published_at?->format('d M Y') }}
        </p>
    </div>
</section>

<section class="section">
    <article class="container content-box">
        @if($post->excerpt)
            <h2>{{ $post->excerpt }}</h2>
        @endif

        <div class="article-content">
            {!! nl2br(e($post->content)) !!}
        </div>

        <a href="{{ route('news') }}" class="text-link">
            ← Kembali ke berita
        </a>
    </article>
</section>
@endsection
