// Transaction handling
class TransactionManager {
    constructor() {
        this.currentTransaction = null;
        this.paymentMethods = [
            { id: 'bank_transfer', name: 'Transfer Bank', icon: 'fas fa-university' },
            { id: 'ewallet', name: 'E-Wallet', icon: 'fas fa-wallet' },
            { id: 'credit_card', name: 'Kartu Kredit', icon: 'fas fa-credit-card' },
            { id: 'virtual_account', name: 'Virtual Account', icon: 'fas fa-landmark' },
            { id: 'retail', name: 'Retail', icon: 'fas fa-store' }
        ];

        this.initEventListeners();
    }

    initEventListeners() {
        // Product selection
        document.querySelectorAll('.select-product').forEach(button => {
            button.addEventListener('click', (e) => this.selectProduct(e));
        });

        // Payment method selection
        document.querySelectorAll('.payment-method').forEach(method => {
            method.addEventListener('click', (e) => this.selectPaymentMethod(e));
        });

        // Form submission
        const transactionForm = document.getElementById('transactionForm');
        if (transactionForm) {
            transactionForm.addEventListener('submit', (e) => this.processTransaction(e));
        }
    }

    selectProduct(e) {
        const productCard = e.target.closest('.product-card');
        const productId = productCard.dataset.productId;
        const productName = productCard.dataset.productName;
        const productPrice = productCard.dataset.productPrice;

        this.currentTransaction = {
            productId,
            productName,
            productPrice,
            quantity: 1,
            total: productPrice
        };

        this.updateTransactionSummary();
        this.showNotification(`Produk ${productName} telah ditambahkan ke keranjang`);
    }

    selectPaymentMethod(e) {
        const methodCard = e.target.closest('.payment-method');
        const methodId = methodCard.dataset.methodId;

        // Remove active class from all methods
        document.querySelectorAll('.payment-method').forEach(m => {
            m.classList.remove('active');
        });

        // Add active class to selected method
        methodCard.classList.add('active');

        if (this.currentTransaction) {
            this.currentTransaction.paymentMethod = methodId;
        }
    }

    updateTransactionSummary() {
        if (!this.currentTransaction) return;

        const summaryElement = document.getElementById('transactionSummary');
        if (summaryElement) {
            summaryElement.innerHTML = `
                <h3>Ringkasan Transaksi</h3>
                <div class="summary-item">
                    <span>Produk:</span>
                    <span>${this.currentTransaction.productName}</span>
                </div>
                <div class="summary-item">
                    <span>Harga:</span>
                    <span>Rp ${this.formatCurrency(this.currentTransaction.productPrice)}</span>
                </div>
                <div class="summary-item">
                    <span>Jumlah:</span>
                    <span>${this.currentTransaction.quantity}</span>
                </div>
                <div class="summary-item total">
                    <span>Total:</span>
                    <span>Rp ${this.formatCurrency(this.currentTransaction.total)}</span>
                </div>
            `;
        }
    }

    async processTransaction(e) {
        e.preventDefault();

        if (!this.currentTransaction) {
            this.showNotification('Silakan pilih produk terlebih dahulu', 'error');
            return;
        }

        if (!this.currentTransaction.paymentMethod) {
            this.showNotification('Silakan pilih metode pembayaran', 'error');
            return;
        }

        // Get form data
        const formData = new FormData(e.target);
        const userData = Object.fromEntries(formData);

        // Combine transaction data
        const transactionData = {
            ...this.currentTransaction,
            ...userData,
            timestamp: new Date().toISOString(),
            transactionId: this.generateTransactionId()
        };

        // Show loading state
        const submitButton = e.target.querySelector('button[type="submit"]');
        const originalText = submitButton.innerHTML;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
        submitButton.disabled = true;

        try {
            // Simulate API call
            await this.simulateApiCall(transactionData);

            // Show success message
            this.showNotification('Transaksi berhasil! Silakan lakukan pembayaran', 'success');

            // Reset form
            setTimeout(() => {
                e.target.reset();
                this.currentTransaction = null;
                this.updateTransactionSummary();

                // Restore button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;

                // Redirect to payment page or history
                window.location.href = '/transaction/history';
            }, 2000);

        } catch (error) {
            this.showNotification('Transaksi gagal. Silakan coba lagi.', 'error');
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
        }
    }

    simulateApiCall(data) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                // Simulate random success/failure
                const isSuccess = Math.random() > 0.2;

                if (isSuccess) {
                    // Save to local storage
                    this.saveTransaction(data);
                    resolve(data);
                } else {
                    reject(new Error('Payment processing failed'));
                }
            }, 1500);
        });
    }

    saveTransaction(transaction) {
        // Get existing transactions
        const transactions = JSON.parse(localStorage.getItem('transactions') || '[]');

        // Add new transaction
        transactions.push(transaction);

        // Save back to local storage
        localStorage.setItem('transactions', JSON.stringify(transactions));
    }

    generateTransactionId() {
        return 'TRX-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9).toUpperCase();
    }

    formatCurrency(amount) {
        return parseInt(amount).toLocaleString('id-ID');
    }

    showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => {
            notification.remove();
        });

        // Create notification
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
            <span>${message}</span>
            <button class="notification-close"><i class="fas fa-times"></i></button>
        `;

        // Add to DOM
        document.body.appendChild(notification);

        // Add close button event
        notification.querySelector('.notification-close').addEventListener('click', () => {
            notification.remove();
        });

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);
    }
}

// Initialize transaction manager when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.transactionManager = new TransactionManager();
});

// Additional utility functions
function formatRupiah(amount) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(amount);
}

// Export for use in other modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { TransactionManager, formatRupiah };
}
