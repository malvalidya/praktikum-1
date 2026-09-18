<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanan Berhasil - Cafe Kita</title>

    <link rel="stylesheet" href="{{ asset('css/cafe.css') }}">
</head>

<body>

    <div class="success-page">

        <div class="success-container">

            <div class="success-icon">
                ✓
            </div>

            <h1>Pesanan Berhasil!</h1>

            <p>
                Terima kasih sudah melakukan pemesanan
                di Cafe Kita.
            </p>


            <!-- NOMOR ANTRIAN -->

            <div class="queue-box">

                <div class="queue-label">
                    Nomor Antrean
                </div>

                <div id="queue-number">
                    A-00
                </div>

            </div>


            <!-- INFORMASI PESANAN -->

            <div class="success-info">

                <div>

                    <small>
                        Nama Pemesan
                    </small>

                    <strong id="success-name">
                        -
                    </strong>

                </div>


                <div>

                    <small>
                        Nomor Meja
                    </small>

                    <strong id="success-table">
                        -
                    </strong>

                </div>

            </div>


            <!-- STATUS PESANAN -->

            <div class="order-status">

                <h3>
                    Status Pesanan
                </h3>


                <div class="status-item">

                    <div class="status-dot"></div>

                    <span>
                        Pesanan diterima
                    </span>

                </div>


                <div class="status-item">

                    <div class="status-dot"></div>

                    <span>
                        Pembayaran berhasil
                    </span>

                </div>


                <div class="status-item">

                    <div class="status-dot"></div>

                    <span>
                        Pesanan sedang diproses
                    </span>

                </div>


                <div class="status-item">

                    <div class="status-dot"></div>

                    <span>
                        Silakan tunggu pesanan kamu
                    </span>

                </div>

            </div>


            <!-- KEMBALI -->

            <a
                href="/"
                class="success-home-btn"
            >
                ← Kembali ke Menu
            </a>

        </div>

    </div>


    <script src="{{ asset('js/cafe.js') }}"></script>

</body>
</html> 