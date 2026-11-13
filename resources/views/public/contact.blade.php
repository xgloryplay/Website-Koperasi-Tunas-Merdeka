@extends('layouts.public')

@section('title', 'Kontak | Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">HUBUNGI KAMI</span>
        <h1>Kontak</h1>
        <p>Hubungi Koperasi Tunas Merdeka untuk informasi dan layanan.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="content-box">
            <h2>Kirim pesan kepada kami.</h2>

            @if(session('success'))
                <p role="status" style="color:#1D6347">
                    {{ session('success') }}
                </p>
            @endif

            @if($errors->any())
                <div role="alert" style="color:#a52a2a">
                    <p>Periksa kembali data yang kamu masukkan.</p>
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf

                <p>
                    <label for="name">Nama</label><br>
                    <input id="name" name="name" required maxlength="120"
                           value="{{ old('name') }}">
                </p>

                <p>
                    <label for="email">Email</label><br>
                    <input id="email" name="email" type="email" required
                           maxlength="190" value="{{ old('email') }}">
                </p>

                <p>
                    <label for="phone">Nomor telepon</label><br>
                    <input id="phone" name="phone" maxlength="30"
                           value="{{ old('phone') }}">
                </p>

                <p>
                    <label for="subject">Subjek</label><br>
                    <input id="subject" name="subject" required maxlength="180"
                           value="{{ old('subject') }}">
                </p>

                <p>
                    <label for="message">Pesan</label><br>
                    <textarea id="message" name="message" rows="6"
                              maxlength="5000" required>{{ old('message') }}</textarea>
                </p>

                <button type="submit" class="button gold">
                    Kirim Pesan ↗
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
