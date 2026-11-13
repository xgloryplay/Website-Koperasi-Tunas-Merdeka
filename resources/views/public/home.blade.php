@extends('layouts.public')

@section('title', 'Koperasi Tunas Merdeka | Bertumbuh Bersama')

@section('content')
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-copy">
            <span class="eyebrow">KOPERASI TUNAS MERDEKA</span>
            <h1>Bertumbuh Bersama,<br><em>Sejahtera Bersama.</em></h1>
            <p>Membangun masa depan yang lebih baik melalui semangat kebersamaan, pelayanan profesional, dan pengelolaan koperasi yang bertanggung jawab.</p>
            <div class="actions">
                <a href="/tentang" class="button gold">Kenali Koperasi ↗</a>
                <a href="/keanggotaan" class="button outline">Informasi Keanggotaan</a>
            </div>
            <div class="hero-note">KEBERSAMAAN · KEPERCAYAAN · KEBERLANJUTAN</div>
        </div>

        <div class="hero-visual">
            <div class="visual-ring ring-one"></div>
            <div class="visual-ring ring-two"></div>
            <div class="visual-card">
                <small>KOPERASI</small>
                <strong>TM</strong>
                <small>TUNAS MERDEKA</small>
            </div>
            <span class="visual-star">✦</span>
            <span class="visual-caption">TUMBUH<br>BERSAMA</span>
        </div>
    </div>
</section>

<section class="intro section">
    <div class="container two-col">
        <div>
            <span class="eyebrow dark">TENTANG KAMI</span>
            <h2>Kekuatan koperasi ada pada <em>kebersamaan.</em></h2>
        </div>
        <div>
            <p>Koperasi Tunas Merdeka hadir dengan semangat gotong royong untuk membangun ekosistem ekonomi yang mengutamakan anggota. Kami percaya pertumbuhan yang baik dibangun melalui kepercayaan, partisipasi, dan tata kelola yang bertanggung jawab.</p>
            <a class="text-link" href="/tentang">Mengenal koperasi kami ↗</a>
        </div>
    </div>
</section>

<section class="values section">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow dark">NILAI KAMI</span>
                <h2>Prinsip yang <em>menumbuhkan.</em></h2>
            </div>
            <p>Landasan dalam membangun hubungan dan pelayanan kepada anggota.</p>
        </div>
        <div class="cards three">
            <article class="value-card">
                <span>01 / KEBERSAMAAN</span>
                <div class="card-icon">✳</div>
                <h3>Tumbuh Bersama</h3>
                <p>Semangat saling mendukung sebagai dasar kehidupan berkoperasi.</p>
            </article>
            <article class="value-card featured">
                <span>02 / KEPERCAYAAN</span>
                <div class="card-icon">◇</div>
                <h3>Tata Kelola</h3>
                <p>Mendorong pengelolaan yang terbuka dan bertanggung jawab.</p>
            </article>
            <article class="value-card">
                <span>03 / KEBERLANJUTAN</span>
                <div class="card-icon">↗</div>
                <h3>Masa Depan</h3>
                <p>Membangun pertumbuhan jangka panjang untuk kepentingan bersama.</p>
            </article>
        </div>
    </div>
</section>

<section class="services section">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow dark">PRODUK & LAYANAN</span>
                <h2>Layanan untuk <em>anggota.</em></h2>
            </div>
            <a class="text-link" href="/produk-layanan">Seluruh layanan ↗</a>
        </div>
        <div class="cards three">
            <a href="/produk-layanan" class="service-card">
                <span class="card-icon">＋</span>
                <small>01 / SIMPANAN</small>
                <h3>Layanan Simpanan</h3>
                <p>Informasi produk simpanan anggota.</p>
                <b>Pelajari ↗</b>
            </a>
            <a href="/produk-layanan" class="service-card">
                <span class="card-icon">◇</span>
                <small>02 / PINJAMAN</small>
                <h3>Layanan Pinjaman</h3>
                <p>Informasi layanan pinjaman dan pembiayaan.</p>
                <b>Pelajari ↗</b>
            </a>
            <a href="/keanggotaan" class="service-card">
                <span class="card-icon">◎</span>
                <small>03 / KEANGGOTAAN</small>
                <h3>Layanan Anggota</h3>
                <p>Informasi dan layanan keanggotaan.</p>
                <b>Pelajari ↗</b>
            </a>
        </div>
        <p class="disclaimer">Rincian produk dan ketentuan layanan mengikuti kebijakan resmi koperasi.</p>
    </div>
</section>

<section class="news-section section">
    <div class="container two-col">
        <div>
            <span class="eyebrow">INFORMASI & PUBLIKASI</span>
            <h2>Terhubung dengan <em>perkembangan kami.</em></h2>
            <p>Temukan informasi, kegiatan, dan publikasi resmi Koperasi Tunas Merdeka.</p>
        </div>
        <div class="news-list">
            <a href="/berita"><span>01</span><b>Berita & Kegiatan</b><strong>↗</strong></a>
            <a href="/publikasi"><span>02</span><b>Publikasi & Dokumen</b><strong>↗</strong></a>
            <a href="/kontak"><span>03</span><b>Informasi Kontak</b><strong>↗</strong></a>
        </div>
    </div>
</section>

<section class="closing">
    <div class="container">
        <span class="eyebrow">LANGKAH BERSAMA</span>
        <h2>Masa depan yang kuat<br>dibangun <em>bersama.</em></h2>
        <p>Kenali Koperasi Tunas Merdeka dan pelajari informasi keanggotaannya.</p>
        <a class="button gold" href="/keanggotaan">Pelajari Keanggotaan ↗</a>
    </div>
</section>
@endsection
