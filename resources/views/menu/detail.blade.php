<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $menu['nama'] }} - Cafe Kita</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f4ee;
            color: #3e2723;
        }

        /* NAVBAR */

        .navbar {
            background: #3d2821;
            padding: 20px 8%;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #e5c4a1;
        }


        /* DETAIL */

        .detail-container {
            max-width: 900px;

            margin: 80px auto;

            padding: 0 20px;
        }

        .detail-card {
            background: white;

            border-radius: 25px;

            padding: 50px;

            box-shadow: 0 15px 40px rgba(62, 39, 35, 0.10);

            text-align: center;
        }

        .detail-icon {
            width: 110px;
            height: 110px;

            margin: 0 auto 25px;

            border-radius: 30px;

            background: #ead9c8;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 55px;
        }

        .category {
            color: #a16e46;

            text-transform: uppercase;

            letter-spacing: 3px;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 12px;
        }

        .detail-card h1 {
            font-size: 40px;

            margin-bottom: 15px;
        }

        .price {
            font-size: 25px;

            color: #a16e46;

            font-weight: bold;

            margin-bottom: 25px;
        }

        .description {
            max-width: 600px;

            margin: 0 auto 35px;

            color: #77675e;

            line-height: 1.8;

            font-size: 16px;
        }

        .back-button {
            display: inline-block;

            padding: 13px 25px;

            background: #5d4037;

            color: white;

            text-decoration: none;

            border-radius: 12px;

            font-weight: bold;

            transition: 0.3s;
        }

        .back-button:hover {
            background: #3e2723;

            transform: translateY(-2px);
        }


        /* FOOTER */

        footer {
            background: #241612;

            color: #b8a69b;

            text-align: center;

            padding: 25px;

            margin-top: 100px;
        }


        /* RESPONSIVE */

        @media (max-width: 600px) {

            .detail-card {
                padding: 35px 20px;
            }

            .detail-card h1 {
                font-size: 30px;
            }

            .price {
                font-size: 22px;
            }

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="logo">
            ☕ Cafe Kita
        </div>

        <a href="/" class="nav-link">
            ← Kembali ke Menu
        </a>

    </nav>



    <!-- DETAIL MENU -->

    <main class="detail-container">

        <div class="detail-card">


            <div class="detail-icon">

                @if ($menu['kategori'] == 'Espresso Based')

                    ☕

                @elseif ($menu['kategori'] == 'Americano Series')

                    🧊

                @elseif ($menu['kategori'] == 'Tea Garden')

                    🍵

                @elseif ($menu['kategori'] == 'Choco Series')

                    🍫

                @elseif ($menu['kategori'] == 'Matcha Series')

                    🍃

                @elseif ($menu['kategori'] == 'Non-Coffee')

                    🍓

                @elseif ($menu['kategori'] == 'Mocktail')

                    🍹

                @else

                    ☕

                @endif

            </div>



            <div class="category">

                {{ $menu['kategori'] }}

            </div>



            <h1>

                {{ $menu['nama'] }}

            </h1>



            <div class="price">

                Rp{{ number_format($menu['harga'], 0, ',', '.') }}

            </div>



            <p class="description">

                {{ $menu['deskripsi'] }}

            </p>



            <a href="/" class="back-button">

                ← Kembali ke Menu

            </a>


        </div>

    </main>



    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 Cafe Kita • Dibuat dengan ☕
        </p>

    </footer>


</body>

</html>