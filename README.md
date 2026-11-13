# Koperasi Tunas Merdeka

Aplikasi web Koperasi Tunas Merdeka berbasis Laravel, dirancang responsif untuk desktop dan perangkat seluler.

## Teknologi

- PHP 8.3+
- Laravel 13
- SQLite untuk pengembangan awal; MySQL/MariaDB direkomendasikan untuk hosting produksi
- Vite dan Tailwind CSS

## Fitur yang tersedia saat ini

- Halaman profil, layanan, keanggotaan, berita, publikasi, dan kontak
- Formulir pengajuan keanggotaan yang menyimpan data ke database
- Formulir kontak yang menyimpan pesan ke database
- Pembatasan laju (rate limit) pada formulir publik
- Navigasi responsif untuk perangkat seluler

## Status pengembangan

Ini masih fondasi situs publik dan penerimaan pengajuan. Fitur operasional koperasi seperti autentikasi anggota/pengurus, dashboard administrasi, persetujuan anggota, simpanan, pinjaman, angsuran, kas, dan laporan belum boleh dianggap tersedia sampai modul tersebut selesai dibangun dan diuji.

## Instalasi lokal

1. Siapkan PHP 8.3+, Composer, Node.js 22+, dan ekstensi PHP yang dibutuhkan Laravel.
2. Clone repository, lalu jalankan:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

3. Atur koneksi database pada `.env`. Untuk SQLite, buat file database:

```bash
touch database/database.sqlite
```

4. Jalankan migrasi dan build aset:

```bash
php artisan migrate
npm ci
npm run build
```

5. Jalankan server lokal:

```bash
php artisan serve
```

Buka alamat yang ditampilkan oleh Artisan dari browser HP/komputer yang dapat mengakses jaringan server.

## Pemeriksaan

```bash
php artisan test
npm run build
```

GitHub Actions menjalankan pemeriksaan ini pada setiap push dan pull request ke branch utama.

## Deployment

Untuk produksi, gunakan hosting/VPS yang mendukung PHP 8.3+, Composer, dan MySQL/MariaDB. Arahkan document root domain ke folder `public`, atur `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL`, kredensial database, dan `APP_KEY` yang unik. Jangan mengunggah file `.env` atau kredensial ke GitHub.

Setelah mengunggah kode, jalankan:

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm ci
npm run build
```

Pastikan folder `storage` dan `bootstrap/cache` dapat ditulis oleh user web server.
