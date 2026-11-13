@extends('layouts.public')

@section('title', 'Keanggotaan | Koperasi Tunas Merdeka')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">MENJADI BAGIAN DARI KAMI</span>
        <h1>Keanggotaan</h1>
        <p>Ajukan minat menjadi anggota Koperasi Tunas Merdeka.</p>
    </div>
</section>

<section class="section">
    <div class="container content-box">
        <h2>Formulir pengajuan keanggotaan</h2>
        <p>Pengajuan ini belum menjadikan Anda anggota resmi. Data akan diperiksa oleh pengurus koperasi.</p>

        @if(session('success'))
            <p role="status" style="color:#1D6347">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <div role="alert" style="color:#a52a2a">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('membership.store') }}">
            @csrf

            <p>
                <label>Nama lengkap</label>
                <input name="full_name" required maxlength="150" value="{{ old('full_name') }}">
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="email" required maxlength="190" value="{{ old('email') }}">
            </p>
            <p>
                <label>Nomor telepon</label>
                <input name="phone" required maxlength="30" value="{{ old('phone') }}">
            </p>
            <p>
                <label>Alamat</label>
                <textarea name="address" required maxlength="2000" rows="3">{{ old('address') }}</textarea>
            </p>
            <p>
                <label>Tanggal lahir (opsional)</label>
                <input type="date" name="birth_date" value="{{ old('birth_date') }}">
            </p>
            <p>
                <label>Pekerjaan (opsional)</label>
                <input name="occupation" maxlength="120" value="{{ old('occupation') }}">
            </p>
            <p>
                <label>Tujuan bergabung (opsional)</label>
                <textarea name="purpose" rows="3" maxlength="2000">{{ old('purpose') }}</textarea>
            </p>

            <div aria-hidden="true" style="position:absolute;left:-10000px">
                <label>Website</label>
                <input name="website" tabindex="-1" autocomplete="off">
            </div>

            <button class="button gold" type="submit">Kirim Pengajuan ↗</button>
        </form>
    </div>
</section>
@endsection
