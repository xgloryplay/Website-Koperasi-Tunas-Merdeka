<?php

use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\MembershipController;
use App\Http\Controllers\Public\NewsController;
use App\Http\Controllers\Public\PublicationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');
Route::view('/tentang', 'public.about')->name('about');
Route::view('/produk-layanan', 'public.services')->name('services');

Route::get('/keanggotaan', fn () => view('public.membership'))->name('membership');
Route::post('/keanggotaan', [MembershipController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('membership.store');

Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.detail');

Route::get('/publikasi', [PublicationController::class, 'index'])->name('publications');

Route::get('/kontak', fn () => view('public.contact'))->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');
