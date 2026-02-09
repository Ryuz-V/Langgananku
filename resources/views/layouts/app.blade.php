<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TopUp Website')</title>

    <!-- CSS dari public/css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="logo">
                    <i class="fas fa-gamepad"></i>
                    <span>TopUp<span class="logo-highlight">Games</span></span>
                </a>

                <!-- Menu Navigasi -->
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Produk</a></li>
                    <li><a href="{{ route('transaction') }}" class="{{ request()->routeIs('transaction') ? 'active' : '' }}">Top Up</a></li>
                    <li><a href="{{ route('transaction.history') }}" class="{{ request()->routeIs('transaction.history') ? 'active' : '' }}">Riwayat</a></li>
                    <li><a href="{{ route('help') }}">Bantuan</a></li>
                </ul>

                <!-- User Menu -->
                <div class="user-menu">
                    <a href="{{ route('profile') }}" class="user-profile">
                        <i class="fas fa-user-circle"></i>
                        <span>Profil</span>
                    </a>
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>TopUpGames</h3>
                <p>Platform top up terpercaya untuk semua kebutuhan gaming dan digital Anda.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="{{ route('products') }}">Produk</a></li>
                    <li><a href="{{ route('transaction') }}">Top Up</a></li>
                    <li><a href="{{ route('transaction.history') }}">Riwayat Transaksi</a></li>
                    <li><a href="{{ route('help') }}">Cara Pembelian</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Dukungan</h3>
                <ul>
                    <li><a href="{{ route('help') }}">Bantuan</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Kontak</h3>
                <p><i class="fas fa-envelope"></i> support@topupgames.com</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 TopUpGames. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript dari public/js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/transactions.js') }}"></script>
    @stack('scripts')
</body>
</html>
