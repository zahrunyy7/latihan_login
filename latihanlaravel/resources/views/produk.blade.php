@extends('layouts.app')

@section('content')
    <main style="padding: 20px;">
        <h1 style="text-align: center; color: #192A56; margin: 20px 0; text-transform: uppercase;">
            Daftar Katalog Produk
        </h1>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">

            @php $products = [['name' => 'Cyber Sepatu', 'price' => 'Rp 500.000'], ['name' => 'Goggle Y2K', 'price' => 'Rp 250.000'], ['name' => 'Jaket Chrome', 'price' => 'Rp 800.000']]; @endphp

            @foreach ($products as $product)
                <div class="card-y2k" style="padding: 15px; text-align: center;">
                    <img src="https://via.placeholder.com/250x150?text={{ $product['name'] }}" alt="{{ $product['name'] }}" style="width: 100%; border-radius: 8px; margin-bottom: 10px; border: 1px solid #192A56;">
                    
                    <h3 style="color: #192A56;">{{ $product['name'] }}</h3>
                    <p style="font-weight: bold; color: #00FFFF; text-shadow: 0 0 5px #00FFFF;">{{ $product['price'] }}</p>
                    
                    <button class="btn-y2k" style="width: 100%; margin-top: 10px;">
                        {{-- PERBAIKAN: Menggunakan helper route() dengan nama rute 'detail' dan mengirim parameter slug --}}
                        <a href="{{ route('detail', ['slug' => Str::slug($product['name'])]) }}" style="color: inherit; text-decoration: none;">
                            LIHAT DETAIL
                        </a>
                    </button>
                </div>
            @endforeach
            </div>
    </main>
@endsection