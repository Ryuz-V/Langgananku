@extends('layouts.app')

@section('title', 'Beranda - LanggananKu')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-[600px] flex items-center pt-44 pb-20 overflow-hidden bg-slate-950" style="margin-top: -16px; margin-bottom: 50px">
    <!-- Background image representing a game character -->
    <div class="absolute inset-0 z-0 flex justify-end">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-transparent z-10 w-full md:w-3/4"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Gaming Character" class="w-full md:w-2/3 h-full object-cover object-center opacity-50" style="border-bottom: 24px solid rgba(2, 6, 23, 0.7); box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.8);">
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Trusted by Gamers. Powered by
                <span class="text-white">Results.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 leading-relaxed max-w-xl">
                LanggananKu membantu para gamer mendapatkan item dalam game dengan cepat dan mudah.
            </p>
            <a href="{{ route('products') }}" class="inline-flex px-8 py-3 rounded-lg bg-yellow-500 hover:bg-yellow-400 text-slate-900 font-bold transition-all duration-300 items-center justify-center ">
                Mulai Belanja
            </a>
        </div>
    </div>
</section>

<!-- Features Badges -->
<section class="py-10 bg-slate-950 relative z-20 -mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Badge 1 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Layanan 24/7</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Customer care staff kami tersedia sepanjang waktu untuk memberikan rekomendasi gratis atau membantu Anda.</p>
            </div>
            <!-- Badge 2 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Harga Terbaik</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Kami menawarkan harga yang paling kompetitif di pasar, memastikan Anda mendapatkan nilai terbaik untuk investasi game Anda.</p>
            </div>
            <!-- Badge 3 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Akun Premium</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Kami menyediakan berbagai macam akun premium untuk memenuhi kebutuhan gaming Anda.</p>
            </div>
            <!-- Badge 4 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Terbukti Dan Terpercaya</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Semua transaksi diamankan oleh sistem kami yang kuat, menjamin keamanan 100% untuk akun dan transaksi Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Top Up Game -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 gap-4">
            <div class="text-center sm:text-left">
                <h2 class="text-2xl font-bold text-white mb-2">Top Up Game</h2>
                <p class="text-slate-400 text-sm italic">Pilih game favoritmu dan top up dengan mudah dan cepat.</p>
            </div>
            <div>
                <a href="#" class="text-sm font-medium text-slate-400 hover:text-yellow-500 transition-colors flex items-center gap-2 group">
                    Lihat Lainnya
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4">
            <!-- Game Logos (Placeholders) -->
            @php
                $games = [
                    ['name' => 'Free Fire', 'image' => 'free-fire-20260131.avif'],
                    ['name' => 'PUBG Mobile', 'image' => 'pubgm-241201.avif'],
                    ['name' => 'Mobile Legends', 'image' => 'mobile-legends-20260215.avif'],
                    ['name' => 'Honor of Kings', 'image' => 'honor-of-kings-20260716.avif'],
                    ['name' => 'Honkai Star Rail', 'image' => 'honkai-star-rail.avif'],
                    ['name' => 'Genshin Impact', 'image' => 'genshin-impact.avif'],
                    ['name' => 'Arena Breakout', 'image' => 'arena-breakout-20250716.avif'],
                    ['name' => 'Magic Chess Go Go', 'image' => 'magic-chess-go-go-20260716.avif'],
                    ['name' => 'Blood Strike', 'image' => 'blood-strike.avif'],
                    ['name' => 'Crystal of Atlan', 'image' => 'crystal-of-atlan.avif'],
                    ['name' => 'Call of Duty Mobile', 'image' => 'call-of-duty-mobile-20250716.avif'],
                    ['name' => 'AFK Journey', 'image' => 'afk-journey.avif'],
                    ['name' => 'Delta Force PC', 'image' => 'delta-force-pc.avif'],
                    ['name' => 'Zenless Zone Zero', 'image' => 'zenless-zone-zero-20240627.avif'],
                ];
            @endphp
            @foreach($games as $game)
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-4 flex flex-col items-center justify-center text-center hover:border-yellow-500/50 transition-colors cursor-pointer group shadow-lg">
                <div class="w-14 h-14 bg-slate-800 rounded-2xl mb-3 flex items-center justify-center border border-slate-700 group-hover:border-yellow-500/50 transition-colors overflow-hidden">
                    <img src="{{ asset('asset/img/' . $game['image']) }}" alt="{{ $game['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="text-slate-300 text-xs font-semibold group-hover:text-white">{{ $game['name'] }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Premium Accounts Top Up -->
<section class="py-16 bg-slate-950 mb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 gap-4">
            <div class="text-center sm:text-left">
                <h2 class="text-2xl font-bold text-white mb-2">Akun Premium</h2>
                <p class="text-slate-400 text-sm italic">Berlangganan akun premium dengan mudah dan cepat.</p>
            </div>
            <div>
                <a href="#" class="text-sm font-medium text-slate-400 hover:text-yellow-500 transition-colors flex items-center gap-2 group">
                    Lihat Lainnya
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $premiumAccounts = [
                    ['name' => 'CapCut', 'image' => 'capcut.avif'],
                    ['name' => 'Disney', 'image' => 'disney.webp'],
                    ['name' => 'Netflix', 'image' => 'netflix.jpg'],
                    ['name' => 'Spotify', 'image' => 'spotfiy.png'],
                    ['name' => 'HBO', 'image' => 'hbo.png'],
                    ['name' => 'YouTube', 'image' => 'Youtube_logo.png'],
                    ['name' => 'Canva', 'image' => 'Canva.jpg'],
                    ['name' => 'Alight Motion', 'image' => 'alight_motion.jpg']
                ];
            @endphp
            @foreach ($premiumAccounts as $account)
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-yellow-500/50 transition-colors flex flex-col items-center p-6 text-center shadow-lg group">
                <div class="w-24 h-24 rounded-full border-2 border-yellow-500 flex items-center justify-center mb-4 overflow-hidden bg-slate-800 shadow-[0_0_15px_rgba(234,179,8,0.3)]">
                    <img src="{{ asset('asset/img/' . $account['image']) }}" alt="{{ $account['name'] }}" class="w-full h-full object-cover">
                </div>
                <h3 class="text-white font-bold mb-1 group-hover:text-yellow-500 transition-colors">{{ $account['name'] }} Premium</h3>
                <div class="flex items-center justify-center gap-1 text-yellow-500 text-[10px] mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="text-slate-400 text-xs mb-1 font-medium">Stock: <span class="text-white">{{ rand(1, 5) }}</span></div>
                <div class="text-slate-400 text-xs mb-6">Status: <span class="text-emerald-400">Available</span></div>

                <div class="w-full flex items-center justify-center mt-auto">
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 text-sm font-bold py-2 px-5 rounded-lg transition-colors shadow-lg shadow-yellow-500/20">Order</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- News and Update Section -->
<section class="py-20 bg-slate-950 overflow-hidden relative border-y border-slate-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 relative">
            <h2 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight">News & <span class="text-yellow-500">Update</span></h2>
            <p class="text-slate-400 text-sm max-w-2xl mx-auto">Dapatkan informasi terbaru seputar update game, event menarik, dan promo eksklusif hanya di LanggananKu.</p>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-yellow-500/10 blur-[50px] rounded-full -z-10"></div>
        </div>

        <div class="relative h-[350px] md:h-[450px] w-full max-w-6xl mx-auto flex items-center justify-center">
            
            <!-- Items -->
            <!-- 1 -->
            <div class="news-carousel-item absolute top-1/2 w-[85%] sm:w-[50%] md:w-[45%] lg:w-[40%] h-[300px] md:h-[400px] rounded-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.5)] transition-all duration-500 cursor-pointer bg-slate-900 border border-slate-700/50" onclick="goToSlide(0)">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="News 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-yellow-500 text-slate-900 text-[10px] md:text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Event</span>
                        <span class="text-slate-300 text-xs">12 Mar 2026</span>
                    </div>
                    <h3 class="text-white text-lg md:text-xl font-bold mb-2 leading-tight">Turnamen Mobile Legends Season 12 Segera Dimulai</h3>
                    <p class="text-slate-400 text-xs md:text-sm line-clamp-2 md:line-clamp-3">Ikuti turnamen terbesar tahun ini dengan total hadiah ratusan juta rupiah. Daftarkan tim kamu sekarang juga dan jadilah juara!</p>
                </div>
                <!-- The JS targets .click-overlay to enable/disable clicks on non-center cards -->
                <div class="click-overlay absolute inset-0 z-50 hidden bg-transparent"></div>
            </div>

            <!-- 2 -->
            <div class="news-carousel-item absolute top-1/2 w-[85%] sm:w-[50%] md:w-[45%] lg:w-[40%] h-[300px] md:h-[400px] rounded-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.5)] transition-all duration-500 cursor-pointer bg-slate-900 border border-slate-700/50" onclick="goToSlide(1)">
                <img src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="News 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-emerald-500 text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Update</span>
                        <span class="text-slate-300 text-xs">10 Mar 2026</span>
                    </div>
                    <h3 class="text-white text-lg md:text-xl font-bold mb-2 leading-tight">Patch Notes Terbaru Valorant - Agent Baru</h3>
                    <p class="text-slate-400 text-xs md:text-sm line-clamp-2 md:line-clamp-3">Penyesuaian agent, perilisan map baru, dan perbaikan bug untuk pengalaman bermain yang jauh lebih baik dan kompetitif.</p>
                </div>
                <div class="click-overlay absolute inset-0 z-50 hidden bg-transparent"></div>
            </div>

            <!-- 3 -->
            <div class="news-carousel-item absolute top-1/2 w-[85%] sm:w-[50%] md:w-[45%] lg:w-[40%] h-[300px] md:h-[400px] rounded-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.5)] transition-all duration-500 cursor-pointer bg-slate-900 border border-slate-700/50" onclick="goToSlide(2)">
                <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="News 3" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-blue-500 text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Promo</span>
                        <span class="text-slate-300 text-xs">08 Mar 2026</span>
                    </div>
                    <h3 class="text-white text-lg md:text-xl font-bold mb-2 leading-tight">Diskon Spesial Top Up 50% Khusus Pengguna Baru</h3>
                    <p class="text-slate-400 text-xs md:text-sm line-clamp-2 md:line-clamp-3">Dapatkan diskon 50% untuk semua kategori game khusus pengguna baru selama periode promo berlangsung. Jangan sampai ketinggalan!</p>
                </div>
                <div class="click-overlay absolute inset-0 z-50 hidden bg-transparent"></div>
            </div>
            
            <!-- 4 -->
            <div class="news-carousel-item absolute top-1/2 w-[85%] sm:w-[50%] md:w-[45%] lg:w-[40%] h-[300px] md:h-[400px] rounded-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.5)] transition-all duration-500 cursor-pointer bg-slate-900 border border-slate-700/50" onclick="goToSlide(3)">
                <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="News 4" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-purple-500 text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Maintenance</span>
                        <span class="text-slate-300 text-xs">05 Mar 2026</span>
                    </div>
                    <h3 class="text-white text-lg md:text-xl font-bold mb-2 leading-tight">Jadwal Maintenance Server LanggananKu Mingguan</h3>
                    <p class="text-slate-400 text-xs md:text-sm line-clamp-2 md:line-clamp-3">Peningkatan performa server dan keamanan transaksi. Layanan akan terganggu sementara waktu pada pukul 02:00 - 04:00 WIB.</p>
                </div>
                <div class="click-overlay absolute inset-0 z-50 hidden bg-transparent"></div>
            </div>

            <!-- Controls -->
            <div class="absolute inset-0 flex justify-between items-center px-4 md:px-8 z-40 pointer-events-none">
                <button id="newsPrevBtn" class="pointer-events-auto bg-slate-900/80 hover:bg-yellow-500 text-slate-300 hover:text-slate-900 w-10 md:w-12 h-10 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 border border-slate-700/50 hover:border-transparent backdrop-blur-md shadow-lg group">
                    <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                </button>
                <button id="newsNextBtn" class="pointer-events-auto bg-slate-900/80 hover:bg-yellow-500 text-slate-300 hover:text-slate-900 w-10 md:w-12 h-10 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 border border-slate-700/50 hover:border-transparent backdrop-blur-md shadow-lg group">
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<section class="py-20 bg-slate-950 mb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-2">Ribuan Pelangan  Percaya Pada Kami, Inilah Alasannya</h2>
            <p class="text-slate-400 text-sm italic">Kami memiliki elemen-elemen pilihan, Anda memilih elemen dan mendapatkan uang untuk elemen tersebut.</p>
            <div class="flex justify-center gap-2 mt-4 text-slate-600 text-2xl">
                <i class="fas fa-arrow-circle-left hover:text-yellow-500 cursor-pointer transition-colors"></i>
                <i class="fas fa-arrow-circle-right hover:text-yellow-500 cursor-pointer transition-colors"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl relative shadow-lg hover:border-yellow-500/50 transition-colors">
                <i class="fas fa-quote-left text-4xl text-slate-800/50 absolute top-4 left-4"></i>
                <div class="relative z-10 flex flex-col items-center h-full">
                    <p class="text-slate-300 text-sm italic mb-8 text-center leading-relaxed h-20">
                        "Fast delivery and very secure! I got my account details within minutes. Outstanding service as always."
                    </p>
                    <div class="flex justify-center text-yellow-500 text-xs mb-6">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="flex flex-col items-center mt-auto">
                        <img src="https://via.placeholder.com/50?text=U{{$i}}" class="w-12 h-12 rounded-full mb-3 border-2 border-slate-700">
                        <h4 class="text-white font-bold text-sm">Customer_{{ $i }}</h4>
                        <span class="text-slate-500 text-xs">Verified Buyer</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // News Carousel Logic
        const newsItems = document.querySelectorAll('.news-carousel-item');
        if (newsItems.length > 0) {
            const totalItems = newsItems.length;
            let currentIndex = 1; // Start with the second item in the middle
            
            // Expose globally for onclick html attributes
            window.goToSlide = function(index) {
                currentIndex = index;
                updateNewsCarousel();
            };

            const nextBtn = document.getElementById('newsNextBtn');
            const prevBtn = document.getElementById('newsPrevBtn');
            
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalItems;
                    updateNewsCarousel();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                    updateNewsCarousel();
                });
            }

            function updateNewsCarousel() {
                newsItems.forEach((item, i) => {
                    let diff = i - currentIndex;
                    
                    // Allow wrapping around
                    if (diff < -Math.floor(totalItems / 2)) diff += totalItems;
                    if (diff > Math.floor(totalItems / 2)) diff -= totalItems;
                    
                    let left = 50;
                    let scale = 1;
                    let zIndex = 10;
                    let opacity = 1;
                    let filter = 'brightness(100%)';
                    
                    const isMobile = window.innerWidth < 768;

                    if (diff === 0) {
                        // Current active center item
                        left = 50; 
                        scale = 1.15; // Dibuat lebih besar (115% ukuran asli)
                        zIndex = 30; 
                        opacity = 1;
                    } else if (diff === -1) {
                        // Left item
                        left = isMobile ? 12 : 18; 
                        scale = 0.8; // Dibuat lebih kecil dari sebelumnya
                        zIndex = 20; 
                        opacity = 1; 
                        filter = 'brightness(50%)';
                    } else if (diff === 1) {
                        // Right item
                        left = isMobile ? 88 : 82; // Dibuat sama dengan jarak ke kiri (100 - 18)
                        scale = 0.8; // Dibuat sama besar dengan kiri
                        zIndex = 19; 
                        opacity = 1; 
                        filter = 'brightness(50%)';
                    } else {
                        // Hidden items
                        left = diff < 0 ? -20 : 120; 
                        scale = 0.6; // Lebih kecil lagi
                        zIndex = 10; 
                        opacity = 0;
                    }
                    
                    item.style.left = left + '%';
                    item.style.transform = `translate(-50%, -50%) scale(${scale})`;
                    item.style.zIndex = zIndex;
                    item.style.opacity = opacity;
                    item.style.filter = filter;
                    
                    // Show or hide the click overlay so users can interact with the center card fully
                    const clickOverlay = item.querySelector('.click-overlay');
                    if (clickOverlay) {
                        clickOverlay.style.display = diff === 0 ? 'none' : 'block';
                    }
                });
            }
            
            // Initialization
            updateNewsCarousel();
            window.addEventListener('resize', updateNewsCarousel);
        }

        // Animated Counters
        const counters = document.querySelectorAll('.counter');
        
        // Duration of the animation in milliseconds
        const duration = 2000; 

        const startCounting = (counter) => {
            const target = +counter.getAttribute('data-target');
            const startTime = performance.now();
            const startValue = 0;

            // Easing function for smooth deceleration (ease-out quintic)
            const easeOutQuint = (x) => 1 - Math.pow(1 - x, 5);

            const updateCount = (currentTime) => {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / duration, 1); // Cap progress at 1
                
                // Calculate current value based on easing progress
                const easeProgress = easeOutQuint(progress);
                const currentValue = Math.ceil(easeProgress * target);

                counter.innerText = currentValue;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target; // Ensure exact final value
                }
            };

            requestAnimationFrame(updateCount);
        };

        // Trigger animation when scrolled into view
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounting(entry.target);
                    // Stop watching once it started
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 }); // Trigger when 50% visible

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
@endpush
