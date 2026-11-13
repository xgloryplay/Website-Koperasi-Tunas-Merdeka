@extends('layouts.public')

@section('title', 'Berita | Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">INFORMASI TERBARU</span>
        <h1>Berita & Kegiatan</h1>
        <p>Ikuti informasi dan perkembangan Koperasi Tunas Merdeka.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        @if($posts->count())
            <div class="cards three">
                @foreach($posts as $post)
                    <article class="content-box">
                        <small class="eyebrow dark">
                            {{ $post->category?->name ?? 'INFORMASI' }}
                        </small>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->excerpt }}</p>
                        <small>{{ $post->published_at?->format('d M Y') }}</small>
                        <br>
                        <a class="text-link"
                           href="{{ route('news.detail', $post->slug) }}">
                            Baca selengkapnya ↗
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="pagination">
                {{ $posts->links() }}
            </div>
        @else
            <div class="content-box">
                <h2>Belum ada berita yang diterbitkan.</h2>
                <p>Informasi terbaru akan ditampilkan melalui halaman ini.</p>
            </div>
        @endif
    </div>
</section>
@endsection
