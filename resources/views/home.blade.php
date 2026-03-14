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
<section class="py-12 pb-20 mb-32 bg-slate-950 overflow-hidden">
    <div class="text-center mb-8" style="padding-left: 10px;">
        <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-wide">Berita & Update </h2>
    </div>
    <div class="relative w-full">
        <div class="pointer-events-none absolute left-0 top-0 h-full w-16 md:w-24 z-10" style="background: linear-gradient(to right, rgba(2,6,23,1), transparent);"></div>
        <div class="pointer-events-none absolute right-0 top-0 h-full w-16 md:w-24 z-10" style="background: linear-gradient(to left, rgba(2,6,23,1), transparent);"></div>

        <div id="news-scroll-track" class="flex gap-4 overflow-x-auto pb-4 px-4" style="scrollbar-width: none; -ms-overflow-style: none; scroll-snap-type: x mandatory;">
            @php
                $newsItems = [
                    [
                        'title'  => 'Jam Terbaik Top Up Mobile Legends Biar Dapat Harga Lebih Murah',
                        'date'   => '09-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1542751110-97427bbecf20?w=600&q=80',
                        'tag'    => 'Tips',
                    ],
                    [
                        'title'  => 'Jangan Asal Top Up! Ini 5 Ciri Website ML yang Berbahaya',
                        'date'   => '08-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1614680376573-df3480f0c6ff?w=600&q=80',
                        'tag'    => 'Keamanan',
                    ],
                    [
                        'title'  => 'Berapa Total Uang yang Dihabiskan Player ML Sampai Mythic Glory? Ini Estimasi…',
                        'date'   => '07-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?w=600&q=80',
                        'tag'    => 'Info',
                    ],
                    [
                        'title'  => 'Apa Perbedaan Top Up Resmi dan Tidak Resmi di Mobile Legends?',
                        'date'   => '05-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=600&q=80',
                        'tag'    => 'Edukasi',
                    ],
                    [
                        'title'  => 'Update Patch Mobile Legends Maret 2026: Hero Baru dan Perubahan Meta',
                        'date'   => '03-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?w=600&q=80',
                        'tag'    => 'Update',
                    ],
                    [
                        'title'  => 'Promo Top Up Diamond Free Fire Spesial Ramadan, Hemat Hingga 30%!',
                        'date'   => '01-03-2026',
                        'image'  => 'https://images.unsplash.com/photo-1616588589676-62b3bd4ff6d2?w=600&q=80',
                        'tag'    => 'Promo',
                    ],
                ];
            @endphp

            @foreach($newsItems as $news)
            <a href="#" class="news-card flex-shrink-0 rounded-2xl overflow-hidden group"
               style="width: 280px; min-width: 280px; scroll-snap-align: start; background: #1a2a6c; background: linear-gradient(160deg, #1a2a6c 0%, #0d1b4b 100%); text-decoration: none;">
                <!-- Thumbnail -->
                <div class="relative w-full overflow-hidden" style="height: 170px;">
                    <img src="{{ $news['image'] }}" alt="{{ $news['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <!-- Tag badge -->
                    <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-full"
                          style="background: rgba(255,255,255,0.15); color: #fff; backdrop-filter: blur(4px);">
                        {{ $news['tag'] }}
                    </span>
                </div>
                <!-- Content -->
                <div class="p-4">
                    <h3 class="text-white font-bold text-sm leading-snug mb-3 line-clamp-3 group-hover:text-yellow-400 transition-colors" style="min-height: 56px;">
                        {{ $news['title'] }}
                    </h3>
                    <p class="text-slate-400 text-xs font-medium">{{ $news['date'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <!-- Navigation buttons -->
    <div class="flex justify-center gap-3 px-4" style="margin-top: 48px;">
        <button id="newsScrollPrev"
                class="w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300"
                style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); box-shadow: 0 0 0 rgba(234,179,8,0);"
                onmouseenter="this.style.background='rgba(234,179,8,0.9)'; this.style.color='#0f172a'; this.style.transform='scale(1.15)'; this.style.boxShadow='0 0 20px rgba(234,179,8,0.5)'; this.style.border='1px solid rgba(234,179,8,0.8)';"
                onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.color='white'; this.style.transform='scale(1)'; this.style.boxShadow='0 0 0 rgba(234,179,8,0)'; this.style.border='1px solid rgba(255,255,255,0.2)';">
            <i class="fas fa-chevron-left text-sm"></i>
        </button>
        <button id="newsScrollNext"
                class="w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300"
                style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.2); box-shadow: 0 0 0 rgba(234,179,8,0);"
                onmouseenter="this.style.background='rgba(234,179,8,0.9)'; this.style.color='#0f172a'; this.style.transform='scale(1.15)'; this.style.boxShadow='0 0 20px rgba(234,179,8,0.5)'; this.style.border='1px solid rgba(234,179,8,0.8)';"
                onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.color='white'; this.style.transform='scale(1)'; this.style.boxShadow='0 0 0 rgba(234,179,8,0)'; this.style.border='1px solid rgba(255,255,255,0.2)';">
            <i class="fas fa-chevron-right text-sm"></i>
        </button>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 bg-slate-950 mb-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-wide">Pertanyaan Umum</h2>
        </div>
        <!-- FAQ Items -->
        <div class="flex flex-col gap-3" id="faq-list">

            @php
                $faqs = [
                    [
                        'q' => 'Apa itu LanggananKu?',
                        'a' => 'LanggananKu adalah platform top up game dan berlangganan akun premium digital terpercaya. Kami menyediakan layanan top up diamond, koin, dan berbagai mata uang dalam game dengan harga terbaik dan proses cepat.',
                    ],
                    [
                        'q' => 'Apa saja layanan yang tersedia di LanggananKu?',
                        'a' => 'Kami menyediakan layanan top up game populer seperti Mobile Legends, Free Fire, PUBG, Genshin Impact, dan banyak lagi. Selain itu, kami juga menyediakan akun premium seperti Netflix, Spotify, YouTube Premium, Disney+, dan lainnya.',
                    ],
                    [
                        'q' => 'Apakah transaksi di LanggananKu aman?',
                        'a' => 'Ya, semua transaksi di LanggananKu dijamin aman. Kami menggunakan sistem enkripsi terkini dan tidak pernah meminta data sensitif seperti password akun game Anda. Setiap transaksi diproses langsung melalui sistem resmi.',
                    ],
                    [
                        'q' => 'Berapa lama proses top up selesai?',
                        'a' => 'Proses top up biasanya selesai dalam hitungan detik hingga beberapa menit setelah pembayaran dikonfirmasi. Untuk akun premium, pengiriman dilakukan maksimal 1x24 jam setelah pembayaran berhasil.',
                    ],
                    [
                        'q' => 'Bagaimana cara melakukan pembelian di LanggananKu?',
                        'a' => 'Caranya mudah: pilih produk yang ingin dibeli, masukkan ID game atau informasi akun yang diperlukan, pilih metode pembayaran, selesaikan pembayaran, dan item akan langsung masuk ke akun Anda secara otomatis.',
                    ],
                    [
                        'q' => 'Metode pembayaran apa saja yang diterima?',
                        'a' => 'Kami menerima berbagai metode pembayaran seperti transfer bank (BCA, Mandiri, BNI, BRI), dompet digital (GoPay, OVO, DANA, ShopeePay), minimarket (Alfamart, Indomaret), dan kartu kredit/debit.',
                    ],
                    [
                        'q' => 'Apakah ada garansi untuk setiap pembelian?',
                        'a' => 'Ya, kami memberikan garansi untuk setiap transaksi. Jika item tidak masuk dalam waktu yang dijanjikan, kami akan memproses ulang atau memberikan refund penuh sesuai kebijakan kami.',
                    ],
                    [
                        'q' => 'Kapan customer service LanggananKu aktif?',
                        'a' => 'Customer service kami aktif 24 jam sehari, 7 hari seminggu termasuk hari libur. Anda dapat menghubungi kami melalui live chat di website, WhatsApp, atau email support@langgananku.com.',
                    ],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="faq-item rounded-xl overflow-hidden cursor-pointer"
                 style="background: linear-gradient(135deg, #1565C0 0%, #1976D2 50%, #2196F3 100%); box-shadow: 0 4px 15px rgba(25, 118, 210, 0.25);"
                 onclick="toggleFaq({{ $index }})">
                <!-- Header -->
                <div class="flex items-center justify-between" style="padding: 24px 28px; min-height: 80px;">
                    <div class="flex items-center gap-3">
                        <span class="faq-icon-{{ $index }} text-white font-bold text-lg leading-none transition-transform duration-300">+</span>
                        <span class="text-white font-semibold text-lg md:text-xl">{{ $faq['q'] }}</span>
                    </div>
                    <i class="faq-chevron-{{ $index }} fas fa-chevron-down text-white text-sm transition-transform duration-300"></i>
                </div>
                <!-- Body -->
                <div id="faq-body-{{ $index }}" class="overflow-hidden transition-all duration-300" style="max-height: 0;">
                    <div class="px-5 pb-4 pt-0">
                        <div class="border-t border-white/20 pt-3">
                            <p class="text-blue-100 text-lg leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // FAQ Accordion
    let openFaqIndex = null;

    function toggleFaq(index) {
        const body     = document.getElementById('faq-body-' + index);
        const icon     = document.querySelector('.faq-icon-' + index);
        const chevron  = document.querySelector('.faq-chevron-' + index);

        const isOpen = body.style.maxHeight !== '0px' && body.style.maxHeight !== '';

        // Close previously opened FAQ
        if (openFaqIndex !== null && openFaqIndex !== index) {
            const prevBody    = document.getElementById('faq-body-' + openFaqIndex);
            const prevIcon    = document.querySelector('.faq-icon-' + openFaqIndex);
            const prevChevron = document.querySelector('.faq-chevron-' + openFaqIndex);
            if (prevBody)    prevBody.style.maxHeight = '0px';
            if (prevIcon)    prevIcon.textContent = '+';
            if (prevChevron) prevChevron.style.transform = 'rotate(0deg)';
        }

        if (isOpen) {
            body.style.maxHeight    = '0px';
            icon.textContent        = '+';
            chevron.style.transform = 'rotate(0deg)';
            openFaqIndex = null;
        } else {
            body.style.maxHeight    = body.scrollHeight + 'px';
            icon.textContent        = '×';
            chevron.style.transform = 'rotate(180deg)';
            openFaqIndex = index;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {

        // News horizontal scroll buttons
        const newsTrack = document.getElementById('news-scroll-track');
        const newsNext  = document.getElementById('newsScrollNext');
        const newsPrev  = document.getElementById('newsScrollPrev');
        const scrollAmount = 300;

        if (newsTrack) {
            if (newsNext) newsNext.addEventListener('click', () => {
                newsTrack.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
            if (newsPrev) newsPrev.addEventListener('click', () => {
                newsTrack.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        }

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
                        left = isMobile ? 2 : 5; 
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
                        left = isMobile ? 98 : 95; 
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
                    item.style.transform = `translate(-50%, 10%) scale(${scale})`;
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
