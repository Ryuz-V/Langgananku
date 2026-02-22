@extends('layouts.app')

@section('title', 'Beranda - LanggananKu')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-[600px] flex items-center pt-44 pb-20 overflow-hidden bg-slate-950 -mt-24">
    <!-- Background image representing a game character -->
    <div class="absolute inset-0 z-0 flex justify-end">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-transparent z-10 w-full md:w-3/4"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Gaming Character" class="w-full md:w-2/3 h-[110%] object-cover object-top opacity-100 -translate-y-10 md:-translate-y-12"> 
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Trusted by Gamers. Powered by <br>
                <span class="text-white">Results.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 leading-relaxed max-w-xl">
                L4T helps gamers farm gold to taking out enemies in exciting, heart-pumping games!
            </p>
            <a href="{{ route('products') }}" class="inline-flex px-8 py-3 rounded-lg bg-yellow-500 hover:bg-yellow-400 text-slate-900 font-bold transition-all duration-300 items-center justify-center">
                Start Playing Here
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
                <h3 class="text-white font-bold mb-2">24/7 Support</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Our customer care staff is available around the clock to give you entirely free recommendations or assist you in any way.</p>
            </div>
            <!-- Badge 2 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Best Prices</h3>
                <p class="text-slate-400 text-xs leading-relaxed">We offer the most competitive prices in the market, ensuring you get the best value for your gaming investment.</p>
            </div>
            <!-- Badge 3 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Outstanding Boost</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Our experienced boosters will help you easily achieve your desired rank and progress further.</p>
            </div>
            <!-- Badge 4 -->
            <div class="bg-slate-900/95 border border-slate-700/50 p-6 rounded-2xl text-center group shadow-xl">
                <div class="w-12 h-12 mx-auto bg-slate-800 rounded-lg flex items-center justify-center mb-4 text-yellow-500 text-2xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-shield-check"></i>
                </div>
                <h3 class="text-white font-bold mb-2">Trust and Evidence</h3>
                <p class="text-slate-400 text-xs leading-relaxed">All trades are secured by our robust system, guaranteeing 100% safety for your accounts and transactions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Earn Money from These Games -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-white mb-2">Earn Money from These Games</h2>
            <p class="text-slate-400 text-sm italic">we have selective elements, you choose elements and make money for elements.</p>
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
                <h2 class="text-2xl font-bold text-white mb-2">Jual Akun Premium & Top Up</h2>
                <p class="text-slate-400 text-sm italic">we have selective elements, you choose elements and make money for elements.</p>
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

<!-- Gold Sending and Selling Guide -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-white mb-2">Gold Sending and Selling Guide</h2>
            <p class="text-slate-400 text-sm italic">we have selective elements, you choose elements and make money for elements.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <a href="#" class="relative rounded-2xl overflow-hidden group block aspect-[2/1] bg-slate-900 border border-slate-800 hover:border-yellow-500/50 transition-colors shadow-xl">
                <div class="absolute inset-0 bg-gradient-to-r from-amber-900/60 to-slate-900/80 z-10"></div>
                <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Delivery Guide" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60 z-0 group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 flex items-end justify-center pb-8 z-20">
                    <h3 class="text-2xl font-bold text-white tracking-wide">Gold Delivery Guide</h3>
                </div>
            </a>
            <a href="#" class="relative rounded-2xl overflow-hidden group block aspect-[2/1] bg-slate-900 border border-slate-800 hover:border-yellow-500/50 transition-colors shadow-xl">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/60 to-slate-900/80 z-10"></div>
                <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="How it works" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60 z-0 group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 flex items-end justify-center pb-8 z-20">
                    <h3 class="text-2xl font-bold text-white tracking-wide">How L4T Works</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="py-20 bg-slate-900/50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6 tracking-wide">About Us</h2>
        <p class="text-slate-400 text-sm leading-relaxed mb-16 max-w-4xl mx-auto">
            Welcome to L4T, the ultimate platform for gamers seeking premium accounts and secure top-ups. With years of experience in the gaming industry, we've established ourselves as a trusted marketplace for players worldwide. Our mission is to provide an accessible, safe, and efficient environment for all your digital gaming needs. Whether you're looking for an account with rare cosmetics, or just need a quick boost in currency, we've got you covered. Join thousands of satisfied customers who have elevated their gaming experience with L4T!
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
            <h2 class="text-3xl font-bold text-white mb-2">Thousands of gamers trust us, here's why</h2>
            <p class="text-slate-400 text-sm italic">we have selective elements, you choose elements and make money for elements.</p>
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

<!-- Game News & Guides -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-white mb-2">Game News & Guides</h2>
            <p class="text-slate-400 text-sm italic">we have selective elements, you choose elements and make money for elements.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @php
                $newsImages = [
                    'https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=400',
                    'https://images.unsplash.com/photo-1538481199005-411f5a5c6ec6?q=80&w=400',
                    'https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=400',
                    'https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=400'
                ];
            @endphp
            @foreach($newsImages as $img)
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden group shadow-lg hover:border-yellow-500/30 transition-all">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ $img }}" alt="News Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-yellow-500 text-slate-900 text-[10px] uppercase tracking-wider font-bold px-4 py-1.5 rounded-full shadow-lg">2026</div>
                </div>
                <div class="p-6">
                    <h3 class="text-white font-bold mb-3 line-clamp-2 hover:text-yellow-500 transition-colors cursor-pointer text-sm leading-relaxed">Best strategies for winning in your favorite massive multiplayer games</h3>
                    <p class="text-slate-400 text-xs line-clamp-2 mb-6 leading-relaxed">Learn the advanced mechanics and hidden features to easily dominate the game.</p>
                    <div class="flex justify-between items-center text-xs text-yellow-500">
                        <span class="text-slate-500"><i class="far fa-clock"></i> 3 mins read</span>
                        <a href="#" class="font-bold hover:text-yellow-400 transition-colors">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="#" class="inline-flex px-10 py-3 rounded-lg border border-yellow-500/50 text-yellow-500 hover:bg-yellow-500 hover:text-slate-900 font-bold transition-all duration-300">
                View More
            </a>
        </div>
    </div>
</section>

@endsection
