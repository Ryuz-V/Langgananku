@extends('layouts.app')

@section('title', 'Beranda - LanggananKu')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[600px] flex items-center pt-20 overflow-hidden">
    <!-- Background Design -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-900/90 to-slate-950 z-10"></div>
        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Gaming Setup" class="w-full h-full object-cover opacity-30">
        
        <!-- Animated Blobs -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-600/20 rounded-full blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-600/20 rounded-full blur-[100px] animate-pulse delay-1000"></div>
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">
        <div class="inline-block mb-4 px-4 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-300 text-sm font-medium backdrop-blur-sm">
            🚀 Platform Top Up Termurah & Teraman
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 tracking-tight leading-tight">
            Top Up Game & Digital <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Lebih Mudah & Cepat</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
            Nikmati pengalaman top up anti ribet dengan proses otomatis 24 jam. Harga bersaing untuk semua game favorit Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}" class="px-8 py-4 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2 group">
                Mulai Belanja
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="#how-to" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all flex items-center justify-center gap-2 backdrop-blur-sm">
                <i class="fas fa-play-circle"></i>
                Cara Top Up
            </a>
        </div>

        <!-- Stats -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-white/5 pt-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">100+</div>
                <div class="text-sm text-slate-400">Game Populer</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">24/7</div>
                <div class="text-sm text-slate-400">Layanan Otomatis</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">5 Detik</div>
                <div class="text-sm text-slate-400">Proses Kilat</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">10k+</div>
                <div class="text-sm text-slate-400">Transaksi Sukses</div>
            </div>
        </div>
    </div>
</section>

<!-- Game Categories -->
<section class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Kategori Populer</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">Temukan game favoritmu dan mulai top up sekarang juga</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach($promotions as $promo)
            <div class="group relative bg-slate-900/50 border border-white/5 rounded-2xl p-6 hover:bg-white/5 transition-all duration-300 hover:-translate-y-2 text-center cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-indigo-500/20 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-gamepad text-2xl text-white"></i>
                </div>
                <h3 class="text-white font-semibold group-hover:text-indigo-400 transition-colors">{{ $promo }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-20 bg-slate-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Produk Terlaris 🔥</h2>
                <p class="text-slate-400">Pilihan terbaik minggu ini</p>
            </div>
            <a href="{{ route('products') }}" class="hidden md:flex items-center gap-2 text-indigo-400 hover:text-indigo-300 transition-colors font-medium">
                Lihat Semua <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($featuredProducts as $product)
            <div class="group bg-slate-900 border border-white/5 rounded-2xl overflow-hidden hover:border-indigo-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/10 flex flex-col h-full">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="https://via.placeholder.com/400x300?text={{ urlencode($product['name']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-60"></div>
                    <span class="absolute top-4 right-4 bg-indigo-500/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        {{ $product['category'] }}
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors">{{ $product['name'] }}</h3>
                    <div class="mt-auto">
                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-xs text-slate-400">Mulai dari</span>
                            <span class="text-lg font-bold text-emerald-400">Rp 10.000</span>
                        </div>
                        <a href="{{ route('products.show', $product['id']) }}" class="block w-full py-3 bg-white/5 hover:bg-indigo-600 text-center text-white font-medium rounded-xl transition-all duration-300 border border-white/10 hover:border-transparent group-hover:shadow-lg group-hover:shadow-indigo-500/25">
                            Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center md:hidden">
            <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 transition-colors font-medium">
                Lihat Semua <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Features / Why Choose Us -->
<section class="py-24 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-indigo-600/5 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Kenapa Memilih Kami?</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">Kami memberikan layanan terbaik untuk kepuasan pengalaman gaming Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="bg-slate-900/50 backdrop-blur-sm border border-white/5 p-8 rounded-2xl text-center hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 mx-auto bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-500/20 transition-colors">
                    <i class="fas fa-bolt text-3xl text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Proses Kilat</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Pesanan diproses otomatis detik itu juga setelah pembayaran terkonfirmasi.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-slate-900/50 backdrop-blur-sm border border-white/5 p-8 rounded-2xl text-center hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 mx-auto bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500/20 transition-colors">
                    <i class="fas fa-shield-alt text-3xl text-emerald-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">100% Aman</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Transaksi terenkripsi dan data privasi Anda terjamin keamanannya.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-slate-900/50 backdrop-blur-sm border border-white/5 p-8 rounded-2xl text-center hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 mx-auto bg-purple-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500/20 transition-colors">
                    <i class="fas fa-headset text-3xl text-purple-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">CS 24/7</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Tim support kami siap membantu kendala Anda kapanpun diperlukan.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-slate-900/50 backdrop-blur-sm border border-white/5 p-8 rounded-2xl text-center hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 mx-auto bg-rose-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-rose-500/20 transition-colors">
                    <i class="fas fa-tags text-3xl text-rose-400"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Harga Terbaik</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Dapatkan harga termurah dan banyak promo menarik setiap harinya.</p>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section id="how-to" class="py-20 bg-slate-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Cara Memesan</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">4 langkah mudah top up game favoritmu</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative">
                <div class="absolute top-8 left-1/2 w-full border-t-2 border-dashed border-white/5 -z-10 hidden lg:block"></div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-slate-800 border-2 border-indigo-500 text-white font-bold text-2xl flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(99,102,241,0.3)]">1</div>
                    <h3 class="text-lg font-bold text-white mb-2">Pilih Game</h3>
                    <p class="text-slate-400 text-sm">Cari dan pilih game yang ingin kamu topup</p>
                </div>
            </div>
            <div class="relative">
                <div class="absolute top-8 left-1/2 w-full border-t-2 border-dashed border-white/5 -z-10 hidden lg:block"></div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-slate-800 border-2 border-indigo-500 text-white font-bold text-2xl flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(99,102,241,0.3)]">2</div>
                    <h3 class="text-lg font-bold text-white mb-2">Isi Data</h3>
                    <p class="text-slate-400 text-sm">Masukkan User ID / Zone ID akun kamu</p>
                </div>
            </div>
            <div class="relative">
                <div class="absolute top-8 left-1/2 w-full border-t-2 border-dashed border-white/5 -z-10 hidden lg:block"></div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-slate-800 border-2 border-indigo-500 text-white font-bold text-2xl flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(99,102,241,0.3)]">3</div>
                    <h3 class="text-lg font-bold text-white mb-2">Bayar</h3>
                    <p class="text-slate-400 text-sm">Pilih metode pembayaran yang tersedia</p>
                </div>
            </div>
            <div class="relative">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-slate-800 border-2 border-emerald-500 text-white font-bold text-2xl flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(16,185,129,0.3)]">
                        <i class="fas fa-check text-emerald-500"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Selesai</h3>
                    <p class="text-slate-400 text-sm">Item akan masuk otomatis ke akun kamu</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
