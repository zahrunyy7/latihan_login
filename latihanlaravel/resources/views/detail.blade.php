@extends('layouts.app')

@section('title', $item['name'] . ' Detail')

@section('content')
    <main style="padding: 40px 20px;">
        <div class="card-y2k" style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 30px;">
            
            {{-- Bagian Kiri: Gambar Produk Dinamis --}}
            {{-- Gambar akan berubah sesuai produk yang dipilih (Cyber Sepatu, Goggle Y2K, Jaket Chrome) --}}
            <div style="flex: 1; min-width: 300px;">
                <img src="{{ asset('images/' . ($item['image'] ?? 'placeholder.png')) }}" alt="Gambar {{ $item['name'] }}" 
                     style="width: 100%; border-radius: 15px; border: 5px solid #00FFFF; box-shadow: 0 0 15px #00FFFF;">
            </div>

            {{-- Bagian Kanan: Detail Teks Produk --}}
            <div style="flex: 2; min-width: 400px;">
                <h1 style="color: #192A56; border-bottom: 3px solid #192A56; padding-bottom: 10px; margin-bottom: 20px;">
                    {{ $item['name'] }}
                </h1>
                
                <p style="font-size: 1.8em; font-weight: bold; color: #00FFFF; text-shadow: 0 0 5px #00FFFF; margin-bottom: 20px;">
                    Harga: {{ $item['price'] }}
                </p>

                <div style="padding: 15px; background-color: #FAF0D4; border: 2px dashed #192A56; border-radius: 10px; margin-bottom: 25px;">
                    <p>
                        {{-- Warna teks stok akan menyesuaikan (merah jika HABIS, hijau jika TERSEDIA) --}}
                        **Stok:** <span style="font-weight: bold; color: {{ $item['stock'] == 'HABIS' ? 'red' : 'green' }}">{{ $item['stock'] }}</span>
                    </p>
                    <p>
                        {{-- Deskripsi diambil dari data yang dikirim oleh rute --}}
                        **Deskripsi:** {{ $item['desc'] ?? 'Tidak ada deskripsi.' }}
                        <small class="d-block mt-2" style="color: #192A56;">
                            (URL Slug yang diakses: {{ $slug ?? 'N/A' }})
                        </small>
                    </p>
                </div>

                <div style="display: flex; gap: 15px;">
                    <button class="btn-y2k" style="flex: 1;">TAMBAH KE KERANJANG</button>
                    <button class="btn-y2k" style="flex: 1; background-color: #192A56; color: #FAF0D4; box-shadow: 0 0 10px #192A56;">BELI SEKARANG</button>
                </div>
            </div>
        </div>
    </main>
@endsection@extends('layouts.app')

@section('title', $item['name'] . ' Detail')

@section('content')
    <main style="padding: 40px 20px;">
        <div class="card-y2k" style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 30px;">
            
            {{-- Bagian Kiri: Gambar Produk Dinamis --}}
            {{-- Gambar akan berubah sesuai produk yang dipilih (Cyber Sepatu, Goggle Y2K, Jaket Chrome) --}}
            <div style="flex: 1; min-width: 300px;">
                <img src="{{ asset('images/' . ($item['image'] ?? 'placeholder.png')) }}" alt="Gambar {{ $item['name'] }}" 
                     style="width: 100%; border-radius: 15px; border: 5px solid #00FFFF; box-shadow: 0 0 15px #00FFFF;">
            </div>

            {{-- Bagian Kanan: Detail Teks Produk --}}
            <div style="flex: 2; min-width: 400px;">
                <h1 style="color: #192A56; border-bottom: 3px solid #192A56; padding-bottom: 10px; margin-bottom: 20px;">
                    {{ $item['name'] }}
                </h1>
                
                <p style="font-size: 1.8em; font-weight: bold; color: #00FFFF; text-shadow: 0 0 5px #00FFFF; margin-bottom: 20px;">
                    Harga: {{ $item['price'] }}
                </p>

                <div style="padding: 15px; background-color: #FAF0D4; border: 2px dashed #192A56; border-radius: 10px; margin-bottom: 25px;">
                    <p>
                        {{-- Warna teks stok akan menyesuaikan (merah jika HABIS, hijau jika TERSEDIA) --}}
                        **Stok:** <span style="font-weight: bold; color: {{ $item['stock'] == 'HABIS' ? 'red' : 'green' }}">{{ $item['stock'] }}</span>
                    </p>
                    <p>
                        {{-- Deskripsi diambil dari data yang dikirim oleh rute --}}
                        **Deskripsi:** {{ $item['desc'] ?? 'Tidak ada deskripsi.' }}
                        <small class="d-block mt-2" style="color: #192A56;">
                            (URL Slug yang diakses: {{ $slug ?? 'N/A' }})
                        </small>
                    </p>
                </div>

                <div style="display: flex; gap: 15px;">
                    <button class="btn-y2k" style="flex: 1;">TAMBAH KE KERANJANG</button>
                    <button class="btn-y2k" style="flex: 1; background-color: #192A56; color: #FAF0D4; box-shadow: 0 0 10px #192A56;">BELI SEKARANG</button>
                </div>
            </div>
        </div>
    </main>
@endsection