<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - Cafe Kita</title>

    <link rel="stylesheet" href="{{ asset('css/cafe.css') }}">
</head>

<body>

    <div class="payment-page">

        <div class="payment-container">

            <!-- ICON -->
            <div class="payment-icon">
                💳
            </div>

            <!-- JUDUL -->
            <div class="payment-label">
                PAYMENT
            </div>

            <h1>
                Pembayaran QRIS
            </h1>

            <p class="payment-description">
                Scan QR Code di bawah menggunakan aplikasi pembayaran pilihanmu.
            </p>


            <!-- TOTAL -->
            <div class="payment-total-box">

                <span>
                    Total Pembayaran
                </span>

                <strong id="payment-total">
                    Rp0
                </strong>

            </div>


            <!-- QRIS -->
            <div class="qris-box">

                <div class="qris-header">

                    <strong>
                        QRIS
                    </strong>

                    <span>
                        Scan untuk membayar
                    </span>

                </div>


                <img
                    src="{{ asset('images/qris.jpeg') }}"
                    alt="QRIS Cafe Kita"
                    class="qris-image"
                >


                <p class="qris-instruction">
                    Buka aplikasi pembayaran kamu,
                    lalu scan QRIS di atas.
                </p>

            </div>


            <!-- INFORMASI -->
            <div class="payment-info">

                <div>
                    <small>
                        Merchant
                    </small>

                    <strong>
                        Cafe Kita
                    </strong>
                </div>


                <div>
                    <small>
                        Metode
                    </small>

                    <strong>
                        QRIS
                    </strong>
                </div>

            </div>


            <!-- TOMBOL -->
            <button
                type="button"
                class="finish-payment-btn"
                onclick="finishPayment()"
            >
                ✓ Saya Sudah Membayar
            </button>


            <!-- KEMBALI -->
            <a
                href="/checkout"
                class="back-checkout"
            >
                ← Kembali ke Checkout
            </a>

        </div>

    </div>


    <script src="{{ asset('js/cafe.js') }}"></script>

</body>
</html>