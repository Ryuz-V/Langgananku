@extends('layouts.app')

@section('title', 'Top Up - TopUp Website')

@section('styles')
<style>
.transaction-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
}

.products-selection,
.payment-section {
    background: white;
    border-radius: var(--border-radius);
    padding: 30px;
    box-shadow: var(--box-shadow);
}

.payment-methods {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.payment-method {
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    cursor: pointer;
    transition: var(--transition);
}

.payment-method:hover,
.payment-method.active {
    border-color: var(--primary-color);
    background-color: rgba(67, 97, 238, 0.05);
}

.payment-method i {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.transaction-form {
    margin-top: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--dark-color);
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: var(--transition);
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: var(--primary-color);
}

.notification {
    position: fixed;
    top: 100px;
    right: 20px;
    background: white;
    border-radius: var(--border-radius);
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 1001;
    animation: slideIn 0.3s ease;
}

.notification.success {
    border-left: 4px solid #28a745;
}

.notification.error {
    border-left: 4px solid #dc3545;
}

.notification.info {
    border-left: 4px solid var(--primary-color);
}

.notification-close {
    background: none;
    border: none;
    color: #999;
    cursor: pointer;
    font-size: 1rem;
}

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>
@endsection

@section('content')
<div class="transaction-container">
    <!-- Products Selection -->
    <div class="products-selection">
        <h2>Pilih Produk</h2>
        <div class="products-grid">
            <!-- Products will be loaded here -->
        </div>
    </div>

    <!-- Payment Section -->
    <div class="payment-section">
        <h2>Pembayaran</h2>

        <!-- Payment Methods -->
        <div class="payment-methods">
            <div class="payment-method" data-method-id="bank_transfer">
                <i class="fas fa-university"></i>
                <span>Transfer Bank</span>
            </div>
            <div class="payment-method" data-method-id="ewallet">
                <i class="fas fa-wallet"></i>
                <span>E-Wallet</span>
            </div>
            <div class="payment-method" data-method-id="credit_card">
                <i class="fas fa-credit-card"></i>
                <span>Kartu Kredit</span>
            </div>
            <div class="payment-method" data-method-id="virtual_account">
                <i class="fas fa-landmark"></i>
                <span>Virtual Account</span>
            </div>
        </div>

        <!-- Transaction Summary -->
        <div id="transactionSummary" class="transaction-summary">
            <p>Silakan pilih produk terlebih dahulu</p>
        </div>

        <!-- Transaction Form -->
        <form id="transactionForm" class="transaction-form">
            @csrf
            <div class="form-group">
                <label for="gameId">ID Game/Account</label>
                <input type="text" id="gameId" name="game_id" required placeholder="Masukkan ID game Anda">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Nomor WhatsApp</label>
                <input type="tel" id="phoneNumber" name="phone_number" required placeholder="08XXXXXXXXXX">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="nama@email.com">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">
                <i class="fas fa-lock"></i> Bayar Sekarang
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
// Load products dynamically
document.addEventListener('DOMContentLoaded', function() {
    const productsGrid = document.querySelector('.products-grid');

    // Sample products data
    const products = [
        {
            id: 1,
            name: 'Mobile Legends Diamond',
            price: 10000,
            image: 'https://via.placeholder.com/300x200?text=Mobile+Legends'
        },
        {
            id: 2,
            name: 'Free Fire Diamond',
            price: 15000,
            image: 'https://via.placeholder.com/300x200?text=Free+Fire'
        },
        {
            id: 3,
            name: 'Valorant Points',
            price: 25000,
            image: 'https://via.placeholder.com/300x200?text=Valorant'
        },
        {
            id: 4,
            name: 'Steam Wallet',
            price: 50000,
            image: 'https://via.placeholder.com/300x200?text=Steam'
        }
    ];

    // Render products
    productsGrid.innerHTML = products.map(product => `
        <div class="product-card" data-product-id="${product.id}"
             data-product-name="${product.name}"
             data-product-price="${product.price}">
            <div class="product-image">
                <img src="${product.image}" alt="${product.name}">
                <span class="product-category">Game</span>
            </div>
            <div class="product-content">
                <h3>${product.name}</h3>
                <div class="product-prices">
                    <span class="price">Rp ${product.price.toLocaleString('id-ID')}</span>
                </div>
                <button type="button" class="btn btn-outline select-product">Pilih</button>
            </div>
        </div>
    `).join('');
});
</script>
@endsection
