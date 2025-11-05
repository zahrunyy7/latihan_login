<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str; // Tambahkan ini jika Str::slug() belum diimpor

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rute web untuk aplikasi Laravel Anda.
|
*/

// Data Produk (Dibuat Statis di sini untuk contoh, di dunia nyata dari Database)
$products = [
    'cyber-sepatu' => [
        'name' => 'Cyber Sepatu',
        'price' => 'Rp 500.000',
        'stock' => 'TERSEDIA',
        'desc' => 'Sepatu dengan desain futuristik, sangat nyaman, dan memiliki sol anti-gravitasi!',
        'image' => 'sepatu.jpg' // Nama file gambar
    ],
    'goggle-y2k' => [
        'name' => 'Goggle Y2K',
        'price' => 'Rp 250.000',
        'stock' => 'HABIS',
        'desc' => 'Kacamata trendi gaya Y2K dengan filter UV superior dan frame bintang.',
        'image' => 'kacamata.jpg' // Nama file gambar
    ],
    'jaket-chrome' => [
        'name' => 'Jaket Chrome',
        'price' => 'Rp 800.000',
        'stock' => 'TERSEDIA',
        'desc' => 'Jaket kulit premium bergaya Chrome Punk dengan aksen metalik salib.',
        'image' => 'jaket.jpg' // Nama file gambar
    ],
];

// Rute Beranda
Route::get('/', function () {
    return view('beranda');
})->name('home');

// Rute Katalog Produk
Route::get('/produk', function () {
    return view('produk');
})->name('katalog');

// Rute Detail Produk (Kritis: Mengirim data spesifik ke view)
Route::get('/detail/{slug}', function ($slug) use ($products) {
    
    // Cari data produk berdasarkan slug
    $item = $products[$slug] ?? null;

    // Jika produk tidak ditemukan, kembalikan 404
    if (!$item) {
        abort(404, 'Produk tidak ditemukan!');
    }
    
    // Kirim data item yang ditemukan ke view 'detail'
    return view('detail', [
        'item' => $item,
        'slug' => $slug
    ]); 
})->name('detail');

// Rute Login (dan lainnya)
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () { return 'Proses Login...'; });
Route::get('/register', function () { return 'Halaman Pendaftaran...'; })->name('register');