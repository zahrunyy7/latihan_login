@extends('layouts.app')

@section('content')
    <div style="background-color: #192A56; color: #00FFFF; padding: 60px 20px; text-align: center; border-bottom: 5px dashed #00FFFF;">
        <h1 style="font-size: 3em; margin-bottom: 10px; text-shadow: 0 0 8px #00FFFF;">
            SISTEM ONLINE V. 2.0.24
        </h1>
        <p style="font-size: 1.2em; max-width: 600px; margin: 0 auto; color: #FAF0D4;">
            Selamat Datang di platform futuristik. Temukan pengalaman berbelanja yang revolusioner!
        </p>
        <button class="btn-y2k" style="margin-top: 30px;">
            <a href="{{ route('katalog') }}" style="color: inherit; text-decoration: none;">
                JELAJAHI KATALOG >
            </a>
        </button>
    </div>

    <main style="padding: 40px 20px;">
        <h2 style="text-align: center; color: #192A56; margin-bottom: 30px; text-transform: uppercase; border-bottom: 2px solid #192A56; padding-bottom: 10px;">
            Highlights Produk Terbaru
        </h2>
        
        {{-- Container Utama Highlight Produk --}}
        <div class="card-y2k" style="max-width: 900px; margin: 20px auto; display: flex; gap: 30px; align-items: flex-start; padding: 25px;">
            
            {{-- BAGIAN KIRI: Tiga Gambar Produk dengan Keterangan --}}
            <div style="flex: 1; display: flex; flex-direction: column; gap: 15px; max-width: 150px; min-width: 150px;">
                
                {{-- ITEM 1: Sepatu --}}
                <div style="text-align: center;">
                    <img src="{{ asset('images/sepatu.png') }}" alt="Sepatu Glitch" 
                         style="width: 100%; height: 150px; border-radius: 8px; border: 2px solid #00FFFF; object-fit: cover;">
                    <p style="margin-top: 5px; font-size: 0.9em; font-weight: bold; color: #192A56;">
                        CYBER SEPATU
                    </p>
                </div>
                
                {{-- ITEM 2: Kacamata --}}
                <div style="text-align: center;">
                    <img src="{{ asset('images/kacamata.jpg') }}" alt="Kacamata Y2K" 
                         style="width: 100%; height: 150px; border-radius: 8px; border: 2px solid #00FFFF; object-fit: cover;">
                    <p style="margin-top: 5px; font-size: 0.9em; font-weight: bold; color: #192A56;">
                        GOGGLE Y2K
                    </p>
                </div>
                
                {{-- ITEM 3: Jaket --}}
                <div style="text-align: center;">
                    <img src="{{ asset('images/jaket.jpg') }}" alt="Jaket Chrome" 
                         style="width: 100%; height: 150px; border-radius: 8px; border: 2px solid #00FFFF; object-fit: cover;">
                    <p style="margin-top: 5px; font-size: 0.9em; font-weight: bold; color: #192A56;">
                        JAKET CHROME
                    </p>
                </div>
            </div>
            
            {{-- BAGIAN KANAN: Deskripsi Highlight --}}
            <div style="flex: 3; padding-left: 20px;">
                <h3 style="color: #192A56; border-bottom: 1px dashed #192A56; padding-bottom: 5px;">
                    ITEM DIGITAL TERBARU
                </h3>
                <p>
                    Nikmati diskon eksklusif 20% untuk semua item yang baru ditambahkan. Penawaran terbatas!
                </p>
                <button class="btn-y2k" style="background-color: #192A56; color: #00FFFF; box-shadow: 0 0 10px #192A56;">
                    <a href="{{ route('detail', ['slug' => 'sepatu-glitch']) }}" style="color: inherit; text-decoration: none;">
                        Lihat Detail
                    </a>
                </button>
            </div>
        </div>
    </main>
@endsection