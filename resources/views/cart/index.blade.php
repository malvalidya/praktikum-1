<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang - Cafe Kita</title>

    <link rel="stylesheet" href="{{ asset('css/cafe.css') }}">
</head>

<body>

    <div class="cart-page">

        <div class="cart-header">
            <a href="/" class="back-home">← Kembali ke Menu</a>

            <h1>Keranjang Pesanan 🛒</h1>

            <p>
                Periksa kembali pesanan kamu sebelum melakukan checkout.
            </p>
        </div>

        <div id="cart-content"></div>

    </div>

    <script src="{{ asset('js/cafe.js') }}"></script>

</body>
</html>