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
<section class="py-20 bg-slate-950 relative border-y border-slate-800/50 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -translate-y-12 translate-x-1/3 w-96 h-96 bg-yellow-500/10 blur-[100px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/3 -translate-x-1/3 w-96 h-96 bg-blue-500/10 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 relative" style="transform: translateX(1.2rem);">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">Berita & Update</h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">Jangan lewatkan informasi mendalam mengenai patch notes terbaru, event eksklusif, dan promo menarik yang hanya ada di LanggananKu.</p>
        </div>

        <!-- 3D Carousel Container -->
        <div class="relative w-full max-w-6xl mx-auto flex items-center justify-center overflow-hidden" style="height: 480px; min-height: 60vh;">
            
            <!-- Items Track -->
            <div id="news-3d-track" class="w-full h-full relative">
                
                <!-- Item 1 -->
                <div class="news-3d-item absolute top-1/2 left-1/2 w-10/12 md:w-5/12 lg:w-4/12 h-80 md:h-96 rounded-3xl overflow-hidden shadow-2xl group cursor-pointer border-2 bg-slate-900 border-slate-700/50" style="transform: translate(-50%, -50%); opacity: 0; max-width: 380px;">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News 1" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10 transition-transform duration-300 transform group-hover:-translate-y-2">
                        <span class="bg-yellow-500/20 text-yellow-400 border border-yellow-500/30 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Event</span>
                        <h3 class="text-white text-xl md:text-2xl font-black mb-2 leading-tight">Turnamen Mobile Legends Season 12</h3>
                        <p class="text-slate-300 text-sm line-clamp-2">Bersiaplah untuk pertempuran epik! Ikuti turnamen terbesar dengan prize pool ratusan juta.</p>
                    </div>
                    <!-- Click overlay to block interactions when not center -->
                    <div class="click-overlay absolute inset-0 z-20 cursor-pointer hidden"></div>
                </div>

                <!-- Item 2 -->
                <div class="news-3d-item absolute top-1/2 left-1/2 w-10/12 md:w-5/12 lg:w-4/12 h-80 md:h-96 rounded-3xl overflow-hidden shadow-2xl group cursor-pointer border-2 bg-slate-900 border-slate-700/50" style="transform: translate(-50%, -50%); opacity: 0; max-width: 380px;">
                    <img src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News 2" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10 transition-transform duration-300 transform group-hover:-translate-y-2">
                        <span class="bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Update</span>
                        <h3 class="text-white text-xl md:text-2xl font-black mb-2 leading-tight">Patch Notes Valorant</h3>
                        <p class="text-slate-300 text-sm line-clamp-2">Penyesuaian agent dan perilisan map baru untuk pengalaman bermain lebih baik.</p>
                    </div>
                    <div class="click-overlay absolute inset-0 z-20 cursor-pointer hidden"></div>
                </div>

                <!-- Item 3 -->
                <div class="news-3d-item absolute top-1/2 left-1/2 w-10/12 md:w-5/12 lg:w-4/12 h-80 md:h-96 rounded-3xl overflow-hidden shadow-2xl group cursor-pointer border-2 bg-slate-900 border-slate-700/50" style="transform: translate(-50%, -50%); opacity: 0; max-width: 380px;">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News 3" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10 transition-transform duration-300 transform group-hover:-translate-y-2">
                        <span class="bg-blue-500/20 text-blue-400 border border-blue-500/30 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Promo</span>
                        <h3 class="text-white text-xl md:text-2xl font-black mb-2 leading-tight">Diskon Spesial 50%</h3>
                        <p class="text-slate-300 text-sm line-clamp-2">Dapatkan diskon untuk semua kategori game khusus pengguna baru.</p>
                    </div>
                    <div class="click-overlay absolute inset-0 z-20 cursor-pointer hidden"></div>
                </div>
                
                <!-- Item 4 (Hidden normally, used for infinite wrapping) -->
                <div class="news-3d-item absolute top-1/2 left-1/2 w-10/12 md:w-5/12 lg:w-4/12 h-80 md:h-96 rounded-3xl overflow-hidden shadow-2xl group cursor-pointer border-2 bg-slate-900 border-slate-700/50 tracking-tight" style="transform: translate(-50%, -50%); opacity: 0; max-width: 380px;">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="News 4" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 z-10 transition-transform duration-300 transform group-hover:-translate-y-2">
                        <span class="bg-purple-500/20 text-purple-400 border border-purple-500/30 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3 inline-block">Maintenance</span>
                        <h3 class="text-white text-xl md:text-2xl font-black mb-2 leading-tight">Jadwal Maintenance Server</h3>
                        <p class="text-slate-300 text-sm line-clamp-2">Peningkatan performa server dan keamanan transaksi mingguan.</p>
                    </div>
                    <div class="click-overlay absolute inset-0 z-20 cursor-pointer hidden"></div>
                </div>

            </div>

            <!-- Arrow Buttons -->
            <button id="carousel3dPrevBtn" class="absolute left-2 md:left-8 z-40 bg-slate-900/80 backdrop-blur w-12 h-12 rounded-full border border-slate-700 text-white flex justify-center items-center hover:bg-yellow-500 hover:text-slate-900 transition-colors shadow-lg">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button id="carousel3dNextBtn" class="absolute right-2 md:right-8 z-40 bg-slate-900/80 backdrop-blur w-12 h-12 rounded-full border border-slate-700 text-white flex justify-center items-center hover:bg-yellow-500 hover:text-slate-900 transition-colors shadow-lg">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>


<!-- FAQ -->
 

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // 3D Carousel Logic
        const items = document.querySelectorAll('.news-3d-item');
        const prevBtn = document.getElementById('carousel3dPrevBtn');
        const nextBtn = document.getElementById('carousel3dNextBtn');
        
        if (items.length > 0) {
            const totalItems = items.length;
            let currentIndex = 0; // Starts at 0
            
            const updateCarouselInfo = () => {
                const isMobile = window.innerWidth < 768; // Adjust distances for mobile

                items.forEach((item, i) => {
                    let diff = i - currentIndex;
                    
                    // Logic to loop around (infinite carousel effect)
                    if (diff < -Math.floor(totalItems / 2)) diff += totalItems;
                    if (diff > Math.floor(totalItems / 2)) diff -= totalItems;
                    
                    // Default values
                    let left = 50;   // percentage from left
                    let scale = 1;   // scale size
                    let zIndex = 10; // z-indexing
                    let opacity = 1; // visibility
                    let brightness = 'brightness(100%)'; // filter
                    let pointerEvents = 'auto';
                    let clickOverlayDisplay = 'none';

                    if (diff === 0) {
                        // CENTER ITEM (Active)
                        left = 50;
                        scale = isMobile ? 1.05 : 1.15; 
                        zIndex = 30;
                        opacity = 1;
                        brightness = 'brightness(100%)';
                        pointerEvents = 'auto'; // allow clicking inside
                        item.classList.add('border-yellow-500'); // Highlight border
                        item.classList.remove('border-slate-700/50');
                    } else if (diff === -1 || (diff === totalItems - 1)) {
                        // LEFT ITEM
                        left = isMobile ? 15 : 22; 
                        scale = isMobile ? 0.8 : 0.85; 
                        zIndex = 20;
                        opacity = 1;
                        brightness = 'brightness(50%)';
                        pointerEvents = 'none'; // prevent interacting with inside elements directly
                        clickOverlayDisplay = 'block'; // intercept clicks to slide instead
                        item.classList.remove('border-yellow-500');
                        item.classList.add('border-slate-700/50');
                    } else if (diff === 1 || (diff === -totalItems + 1)) {
                        // RIGHT ITEM
                        left = isMobile ? 85 : 78; 
                        scale = isMobile ? 0.8 : 0.85;
                        zIndex = 20;
                        opacity = 1;
                        brightness = 'brightness(50%)';
                        pointerEvents = 'none';
                        clickOverlayDisplay = 'block';
                        item.classList.remove('border-yellow-500');
                        item.classList.add('border-slate-700/50');
                    } else {
                        // HIDDEN ITEMS
                        left = diff < 0 ? -50 : 150;
                        scale = 0.5;
                        zIndex = 10;
                        opacity = 0;
                        pointerEvents = 'none';
                    }
                    
                    // Apply styles
                    item.style.left = left + '%';
                    item.style.transform = `translate(-50%, -50%) scale(${scale})`;
                    item.style.zIndex = zIndex;
                    item.style.opacity = opacity;
                    item.style.filter = brightness;
                    
                    // Show click overlay to easily navigate sides
                    const overlay = item.querySelector('.click-overlay');
                    if(overlay) {
                        overlay.style.display = clickOverlayDisplay;
                    }
                });
            };

            const nextSlide = () => {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarouselInfo();
            };

            const prevSlide = () => {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                updateCarouselInfo();
            };

            if(nextBtn) nextBtn.addEventListener('click', nextSlide);
            if(prevBtn) prevBtn.addEventListener('click', prevSlide);

            // Allow clicking the side items to bring them to center
            items.forEach((item, i) => {
                const overlay = item.querySelector('.click-overlay');
                if(overlay) {
                    overlay.addEventListener('click', (e) => {
                        e.preventDefault();
                        let diff = i - currentIndex;
                        if (diff < -Math.floor(totalItems / 2)) diff += totalItems;
                        if (diff > Math.floor(totalItems / 2)) diff -= totalItems;
                        
                        if(diff > 0) nextSlide();
                        if(diff < 0) prevSlide();
                    });
                }
            });

            // Re-calc on resize for mobile responsiveness
            window.addEventListener('resize', updateCarouselInfo);

            // Initialize
            updateCarouselInfo();
            
            // Auto Play
            let carouselInterval = setInterval(nextSlide, 4000);
            const trackArea = document.getElementById('news-3d-track');
            if(trackArea) {
                trackArea.addEventListener('mouseenter', () => clearInterval(carouselInterval));
                trackArea.addEventListener('mouseleave', () => { carouselInterval = setInterval(nextSlide, 4000) });
            }
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
