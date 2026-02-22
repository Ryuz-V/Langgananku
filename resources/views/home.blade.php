@extends('layouts.app')

@section('title', 'Beranda - LanggananKu')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-[600px] flex items-center pt-44 pb-20 overflow-hidden bg-slate-950" style="margin-top: -16px;">
    <!-- Background image representing a game character -->
    <div class="absolute inset-0 z-0 flex justify-end">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-transparent z-10 w-full md:w-3/4"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Gaming Character" class="w-full md:w-2/3 h-full object-cover object-center opacity-50" style="border-bottom: 24px solid rgba(2, 6, 23, 0.7); box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.8);"> 
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl lg:text-5xl font-black text-white mb-6 leading-tight">
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
                    <i class="fas fa-shield-check"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Terbukti Dan Terpercaya</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Semua transaksi diamankan oleh sistem kami yang kuat, menjamin keamanan 100% untuk akun dan transaksi Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Earn Money from These Games -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-white mb-2">Top Up Game</h2>
            <p class="text-slate-400 text-sm italic">Pilih game favoritmu dan top up dengan mudah dan cepat.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4">
            <!-- Game Logos (Placeholders) -->
            @php
                $games = ['World of Warcraft', 'Classic WOW', 'Season 20', 'Final Fantasy', 'Albion', 'Lost Ark', 'Path of Exile 2', 'Tarisland', 'New World', 'Diablo 4', 'RuneScape', 'EVE', 'Throne and Liberty', 'Warframe'];
            @endphp
            @foreach($games as $game)
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-4 flex flex-col items-center justify-center text-center hover:border-yellow-500/50 transition-colors cursor-pointer group shadow-lg">
                <div class="w-14 h-14 bg-slate-800 rounded-full mb-3 flex items-center justify-center border border-slate-700 group-hover:border-yellow-500/50 transition-colors">
                    <span class="text-slate-500 group-hover:text-yellow-500 font-bold text-[10px] uppercase">{{ substr($game, 0, 3) }}</span>
                </div>
                <h3 class="text-slate-300 text-xs font-semibold group-hover:text-white">{{ $game }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Premium Accounts & Top Up -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 gap-4">
            <div class="text-center sm:text-left">
                <h2 class="text-2xl font-bold text-white mb-2">Jual Akun Premium</h2>
                <p class="text-slate-400 text-sm italic">Dapatkan akun favoritmu dengan mudah dan cepat.</p>
            </div>
            <div>
                <select class="bg-slate-900 text-slate-300 border border-slate-700 rounded-lg px-4 py-2 text-sm outline-none focus:border-yellow-500 transition-colors cursor-pointer">
                    <option>All Games</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-yellow-500/50 transition-colors flex flex-col items-center p-6 text-center shadow-lg group">
                <div class="w-24 h-24 rounded-full border-2 border-yellow-500 flex items-center justify-center mb-4 overflow-hidden bg-slate-800 shadow-[0_0_15px_rgba(234,179,8,0.3)]">
                    <img src="https://via.placeholder.com/100?text={{ $i }}" alt="Avatar" class="w-full h-full object-cover">
                </div>
                <h3 class="text-white font-bold mb-1 group-hover:text-yellow-500 transition-colors">Premium Account {{ $i }}</h3>
                <div class="flex items-center justify-center gap-1 text-yellow-500 text-[10px] mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="text-slate-400 text-xs mb-1 font-medium">Server: Global Region</div>
                <div class="text-slate-400 text-xs mb-6">Status: <span class="text-emerald-400">Available</span></div>
                
                <div class="w-full flex items-center justify-between mt-auto">
                    <div class="text-xl font-bold text-white">Rp 150.000</div>
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 text-sm font-bold py-2 px-5 rounded-lg transition-colors shadow-lg shadow-yellow-500/20">Order</a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- About Us -->
<section class="py-20 bg-slate-900/50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6 tracking-wide">Tentang Kami</h2>
        <p class="text-slate-400 text-sm leading-relaxed mb-16 max-w-4xl mx-auto">
            Selamat datang di LanggananKu, platform terbaik bagi para gamer yang mencari akun premium dan top-up yang aman. Dengan pengalaman bertahun-tahun di industri game, kami telah memantapkan diri sebagai pasar terpercaya bagi para pemain di seluruh dunia. Misi kami adalah menyediakan lingkungan yang mudah diakses, aman, dan efisien untuk semua kebutuhan digital gaming Anda. Baik Anda mencari akun dengan item langka, atau hanya membutuhkan tambahan mata uang dengan cepat, kami siap membantu Anda. Bergabunglah dengan ribuan pelanggan puas yang telah meningkatkan pengalaman bermain game mereka dengan L4T!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-800">
            <div class="py-4 md:py-0">
                <div class="text-5xl font-black text-yellow-500 mb-3">+25000</div>
                <div class="text-slate-400 text-xs uppercase tracking-[0.2em] font-medium">Satisfied Customers</div>
            </div>
            <div class="py-4 md:py-0">
                <div class="text-5xl font-black text-yellow-500 mb-3">+250000</div>
                <div class="text-slate-400 text-xs uppercase tracking-[0.2em] font-medium">Successful Transactions</div>
            </div>
            <div class="py-4 md:py-0">
                <div class="text-5xl font-black text-yellow-500 mb-3">+30</div>
                <div class="text-slate-400 text-xs uppercase tracking-[0.2em] font-medium">Supported Games</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-2">Ribuan Gamer Percaya Pada Kami, Inilah Alasannya</h2>
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
