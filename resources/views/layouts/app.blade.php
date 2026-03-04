<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TopUp Website')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-slate-950 text-slate-200 font-sans antialiased selection:bg-indigo-500 selection:text-white">
    <!-- Header -->
    <header class="fixed top-0 w-full z-50 transition-all duration-300 bg-slate-950/80 backdrop-blur-md border-b border-white/10">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-bold text-white group">
                    <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-10 h-10 transition-all duration-300">
                    <span>Langga<span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">nanKu</span></span>
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center gap-8">
                    <li><a href="{{ route('home') }}" class="text-sm font-medium text-slate-300 hover:text-white transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-indigo-400 after:transition-all hover:after:w-full {{ request()->routeIs('home') ? 'text-white after:w-full' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('products') }}" class="text-sm font-medium text-slate-300 hover:text-white transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-indigo-400 after:transition-all hover:after:w-full {{ request()->routeIs('products') ? 'text-white after:w-full' : '' }}">Produk</a></li>
                    <li><a href="{{ route('transaction') }}" class="text-sm font-medium text-slate-300 hover:text-white transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-indigo-400 after:transition-all hover:after:w-full {{ request()->routeIs('transaction') ? 'text-white after:w-full' : '' }}">Top Up</a></li>
                    <li><a href="{{ route('help') }}" class="text-sm font-medium text-slate-300 hover:text-white transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-indigo-400 after:transition-all hover:after:w-full">Bantuan</a></li>
                </ul>

                <!-- User Menu -->
                <div class="hidden md:flex items-center gap-4">
                    <a href="{{ route('profile') }}" class="flex items-center justify-center gap-3 rounded-lg bg-white hover:bg-slate-100 transition-all text-sm font-bold text-slate-900 shadow-md" style="padding: 10px 14px; font-size: 14px;">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25C22.56 11.47 22.49 10.72 22.36 10H12V14.26H17.92C17.66 15.63 16.89 16.81 15.73 17.58V20.34H19.31C21.4 18.42 22.56 15.6 22.56 12.25Z" fill="#4285F4"/>
                            <path d="M12 23C14.97 23 17.46 22.02 19.31 20.34L15.73 17.58C14.73 18.25 13.48 18.66 12 18.66C9.13 18.66 6.7 16.73 5.82 14.15H2.15V16.99C4.01 20.68 7.7 23 12 23Z" fill="#34A853"/>
                            <path d="M5.82 14.15C5.59 13.47 5.46 12.75 5.46 12C5.46 11.25 5.59 10.53 5.82 9.85V7.01H2.15C1.38 8.54 0.95 10.22 0.95 12C0.95 13.78 1.38 15.46 2.15 16.99L5.82 14.15Z" fill="#FBBC05"/>
                            <path d="M12 5.34C13.62 5.34 15.06 5.89 16.2 6.98L19.4 3.78C17.44 1.95 14.96 0.95 12 0.95C7.7 0.95 4.01 3.27 2.14 6.96L5.81 9.8C6.69 7.22 9.13 5.34 12 5.34Z" fill="#EA4335"/>
                        </svg>
                        <span>Sign In with Google</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-slate-300 hover:text-white text-2xl" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="md:hidden hidden bg-slate-900 border-t border-white/10" id="mobileMenu">
            <ul class="px-4 py-4 space-y-2">
                <li><a href="{{ route('home') }}" class="block px-4 py-2 rounded-lg hover:bg-white/5 text-slate-300 hover:text-white {{ request()->routeIs('home') ? 'bg-white/5 text-white' : '' }}">Beranda</a></li>
                <li><a href="{{ route('products') }}" class="block px-4 py-2 rounded-lg hover:bg-white/5 text-slate-300 hover:text-white {{ request()->routeIs('products') ? 'bg-white/5 text-white' : '' }}">Produk</a></li>
                <li><a href="{{ route('transaction') }}" class="block px-4 py-2 rounded-lg hover:bg-white/5 text-slate-300 hover:text-white {{ request()->routeIs('transaction') ? 'bg-white/5 text-white' : '' }}">Top Up</a></li>
                <li><a href="{{ route('transaction.history') }}" class="block px-4 py-2 rounded-lg hover:bg-white/5 text-slate-300 hover:text-white {{ request()->routeIs('transaction.history') ? 'bg-white/5 text-white' : '' }}">Riwayat</a></li>
                <li><a href="{{ route('help') }}" class="block px-4 py-2 rounded-lg hover:bg-white/5 text-slate-300 hover:text-white">Bantuan</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-24 min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-white/10 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="space-y-4">
                    <div class="flex items-center gap-2 text-2xl font-bold text-white">
                        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-8 h-8 transition-all duration-300">
                        <span>Langga<span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">nanKu</span></span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Platform top up terpercaya untuk semua kebutuhan gaming dan digital Anda. Proses kilat, aman, dan tersedia 24/7.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-500/20 flex items-center justify-center text-slate-400 hover:text-indigo-400 transition-all border border-white/5 hover:border-indigo-500/50">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-500/20 flex items-center justify-center text-slate-400 hover:text-indigo-400 transition-all border border-white/5 hover:border-indigo-500/50">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-500/20 flex items-center justify-center text-slate-400 hover:text-indigo-400 transition-all border border-white/5 hover:border-indigo-500/50">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-indigo-500/20 flex items-center justify-center text-slate-400 hover:text-indigo-400 transition-all border border-white/5 hover:border-indigo-500/50">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Layanan</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('products') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Semua Produk</a></li>
                        <li><a href="{{ route('transaction') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Top Up Instan</a></li>
                        <li><a href="{{ route('transaction.history') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Lacak Pesanan</a></li>
                        <li><a href="{{ route('help') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Panduan Pembelian</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Dukungan</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('help') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">FAQs</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Hubungi Kami</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-slate-400 text-sm">
                            <i class="fas fa-envelope mt-1 text-indigo-400"></i>
                            <span>support@langgananku.com</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-400 text-sm">
                            <i class="fas fa-phone mt-1 text-indigo-400"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-400 text-sm">
                            <i class="fas fa-map-marker-alt mt-1 text-indigo-400"></i>
                            <span>Jakarta Selatan, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-white/10 text-center">
                <p class="text-slate-500 text-sm">&copy; {{ date('Y') }} LanggananKu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.getElementById('mobileMenuToggle').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>
    <script src="{{ asset('js/transactions.js') }}"></script>
    @stack('scripts')
</body>
</html>
