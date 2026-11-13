<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\NewsController;
use App\Http\Controllers\Public\PublicationController;
use App\Http\Controllers\Public\ContactController;

Route::view('/', 'public.home')->name('home');
Route::view('/tentang', 'public.about')->name('about');
Route::view('/produk-layanan', 'public.services')->name('services');
Route::view('/keanggotaan', 'public.membership')->name('membership');\n\nRoute::post('/keanggotaan', [MembershipController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('membership.store');



Route::get('/berita', [NewsController::class, 'index'])
    ->name('news');

Route::get('/berita/{slug}', [NewsController::class, 'show'])
    ->name('news.detail');

Route::get('/publikasi', [PublicationController::class, 'index'])
    ->name('publications');

Route::view('/kontak', 'public.contact')->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');
