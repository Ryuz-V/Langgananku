@extends('layouts.app')

@section('title', 'Beranda - TopUp Website')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Top Up Game & Digital Lebih Mudah</h1>
        <p>Top up cepat, aman, dan terpercaya untuk semua game favorit Anda</p>
        <a href="{{ route('products') }}" class="btn btn-primary">Lihat Produk <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="hero-image">
        <img src="https://cdn.pixabay.com/photo/2017/08/10/08/47/abstract-2617410_1280.jpg" alt="Top Up Games">
    </div>
</section>

<!-- Promotions -->
<section class="promotions">
    <div class="section-title">
        <h2>Promo Spesial</h2>
        <p>Jangan lewatkan penawaran terbaik kami</p>
    </div>
    <div class="promo-cards">
        @foreach($promotions as $promo)
        <div class="promo-card">
            <div class="promo-icon">
                <i class="fas fa-gift"></i>
            </div>
            <div class="promo-content">
                <h3>{{ $promo }}</h3>
                <a href="#" class="btn-promo">Klaim Sekarang</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Featured Products -->
<section class="featured-products">
    <div class="section-title">
        <h2>Produk Terpopuler</h2>
        <p>Top up produk favorit para gamers</p>
    </div>
    <div class="products-grid">
        @foreach($featuredProducts as $product)
        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/300x200?text={{ urlencode($product['name']) }}" alt="{{ $product['name'] }}">
                <span class="product-category">{{ $product['category'] }}</span>
            </div>
            <div class="product-content">
                <h3>{{ $product['name'] }}</h3>
                <div class="product-prices">
                    <span class="price">Rp 10.000 - Rp 500.000</span>
                </div>
                <a href="{{ route('products.show', $product['id']) }}" class="btn btn-outline">Beli Sekarang</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="{{ route('products') }}" class="btn btn-secondary">Lihat Semua Produk</a>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="section-title">
        <h2>Kenapa Memilih Kami?</h2>
        <p>Keunggulan platform top up kami</p>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-bolt"></i>
            </div>
            <h3>Proses Cepat</h3>
            <p>Proses top up hanya dalam hitungan menit setelah pembayaran</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Aman & Terpercaya</h3>
            <p>Transaksi aman dengan sistem keamanan terbaru</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-headset"></i>
            </div>
            <h3>Support 24/7</h3>
            <p>Customer service siap membantu kapan saja</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-percentage"></i>
            </div>
            <h3>Harga Terbaik</h3>
            <p>Harga kompetitif dengan promo menarik setiap hari</p>
        </div>
    </div>
</section>

<!-- How to Order -->
<section class="how-to-order">
    <div class="section-title">
        <h2>Cara Memesan</h2>
        <p>Langkah mudah melakukan top up</p>
    </div>
    <div class="steps">
        <div class="step">
            <div class="step-number">1</div>
            <h3>Pilih Produk</h3>
            <p>Temukan game atau produk digital yang ingin Anda top up</p>
        </div>
        <div class="step">
            <div class="step-number">2</div>
            <h3>Masukkan Data</h3>
            <p>Masukkan ID game atau akun tujuan top up</p>
        </div>
        <div class="step">
            <div class="step-number">3</div>
            <h3>Pembayaran</h3>
            <p>Pilih metode pembayaran yang tersedia</p>
        </div>
        <div class="step">
            <div class="step-number">4</div>
            <h3>Top Up Selesai</h3>
            <p>Produk akan dikirim secara instan ke akun Anda</p>
        </div>
    </div>
</section>
@endsection 
