<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Checkout - Cafe Kita</title>

    <link rel="stylesheet"
          href="{{ asset('css/cafe.css') }}">

</head>

<body class="checkout-page">

    <!-- MAIN -->

    <main class="checkout-container">

        <!-- JUDUL -->

        <div class="checkout-heading">

            <span class="section-label">
                ALMOST THERE
            </span>

            <h1>
                Checkout Pesanan
            </h1>

            <p>
                Lengkapi informasi pesananmu sebelum melakukan pembayaran.
            </p>

        </div>


        <!-- CONTENT -->

        <div class="checkout-layout">


            <!-- FORM -->

            <div class="checkout-form">

                <h2>
                    Informasi Pemesan
                </h2>


                <!-- NAMA -->

                <div class="form-group">

                    <label for="customer-name">
                        Nama Pemesan
                    </label>

                    <input
                        type="text"
                        id="customer-name"
                        placeholder="Masukkan nama kamu"
                    >

                </div>


                <!-- MEJA -->

                <div class="form-group">

                    <label for="table-number">
                        Nomor Meja
                    </label>

                    <input
                        type="number"
                        id="table-number"
                        placeholder="Contoh: 12"
                    >

                </div>


                <!-- CATATAN -->

                <div class="form-group">

                    <label for="order-note">
                        Catatan Pesanan
                    </label>

                    <textarea
                        id="order-note"
                        rows="4"
                        placeholder="Contoh: less ice, tanpa gula..."
                    ></textarea>

                </div>


                <!-- PEMBAYARAN -->

                <h2 class="payment-title">
                    Metode Pembayaran
                </h2>


                <!-- QRIS -->

                <label class="payment-option">

                    <input
                        type="radio"
                        name="payment"
                        value="qris"
                        checked
                    >

                    <span class="payment-icon">
                        📱
                    </span>

                    <span class="payment-info">

                        <strong>
                            QRIS
                        </strong>

                        <small>
                            Scan & bayar menggunakan e-wallet
                        </small>

                    </span>

                </label>


                <!-- CASH -->

                <label class="payment-option">

                    <input
                        type="radio"
                        name="payment"
                        value="cash"
                    >

                    <span class="payment-icon">
                        💵
                    </span>

                    <span class="payment-info">

                        <strong>
                            Bayar di Kasir
                        </strong>

                        <small>
                            Bayar langsung saat mengambil pesanan
                        </small>

                    </span>

                </label>


                <!-- BUTTON -->

                <button
                    type="button"
                    class="place-order-btn"
                    onclick="createOrder()"
                >
                    Buat Pesanan →
                </button>

            </div>


            <!-- RINGKASAN -->

            <div class="checkout-summary">

                <h2>
                    Pesananmu 🛒
                </h2>

                <div id="checkout-items"></div>

                <div class="summary-line"></div>

                <div class="summary-total">

                    <span>
                        Total
                    </span>

                    <strong id="checkout-total">
                        Rp0
                    </strong>

                </div>

            </div>


        </div>

                    <!-- NAVBAR -->

    <nav class="checkout-navbar">

        <a href="/" class="checkout-logo">
            ☕ Cafe Kita
        </a>

        <a href="/cart" class="checkout-back">
            ← Kembali ke Keranjang
        </a>

    </nav>

    </main>


    <!-- FOOTER -->

 


    <script src="{{ asset('js/cafe.js') }}"></script>

</body>

</html>