<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cafe Kita - Menu</title>

    <link rel="stylesheet" href="{{ asset('css/cafe.css') }}">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f4ee;
            color: #3e2723;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;

            padding: 22px 8%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            z-index: 10;

            background: rgba(40, 25, 18, 0.35);

            backdrop-filter: blur(8px);
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;

            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #e8c7a5;
        }


        /* ================= HERO ================= */

        .hero {

            min-height: 620px;

            display: flex;

            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 120px 20px 80px;

            color: white;

            background-image:

                linear-gradient(
                    rgba(35, 22, 17, 0.68),
                    rgba(35, 22, 17, 0.68)
                ),

                url('/images/bg-cafe.jpg');

            background-size: cover;

            background-position: center;
        }

        .hero-content {
            max-width: 800px;
        }

        .badge {

            display: inline-block;

            padding: 9px 18px;

            border-radius: 30px;

            border: 1px solid rgba(255,255,255,0.4);

            background: rgba(255,255,255,0.12);

            margin-bottom: 25px;

            font-size: 14px;
        }

        .hero h1 {

            font-size: 58px;

            line-height: 1.1;

            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #e7c6a4;
        }

        .hero p {

            font-size: 18px;

            line-height: 1.7;

            color: #f1e6dc;

            margin-bottom: 32px;
        }

        .hero-button {

            display: inline-block;

            padding: 14px 30px;

            background: #b78355;

            color: white;

            text-decoration: none;

            border-radius: 30px;

            font-weight: bold;

            transition: 0.3s;
        }

        .hero-button:hover {

            background: #8f603c;

            transform: translateY(-3px);
        }


        /* ================= MENU ================= */

        .menu-section {

            padding: 90px 7%;
        }

        .section-header {

            text-align: center;

            max-width: 700px;

            margin: 0 auto 60px;
        }

        .section-header small {

            color: #a16e46;

            font-weight: bold;

            letter-spacing: 3px;

            text-transform: uppercase;
        }

        .section-header h2 {

            font-size: 40px;

            margin: 12px 0;
        }

        .section-header p {

            color: #7d6a5f;

            line-height: 1.7;
        }


        /* ================= CATEGORY ================= */

        .category-section {

            max-width: 1200px;

            margin: 0 auto 65px;
        }

        .category-title {

            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 25px;
        }

        .category-icon {

            width: 52px;

            height: 52px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 15px;

            background: #ead9c8;

            font-size: 27px;
        }

        .category-title h3 {

            font-size: 27px;
        }

        .category-title p {

            color: #9a8172;

            font-size: 13px;

            margin-top: 4px;
        }


        /* ================= MENU LIST ================= */

        .menu-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .menu-card {

            background: white;

            border-radius: 17px;

            padding: 22px;

            border: 1px solid #eee2d6;

            box-shadow: 0 8px 25px rgba(62,39,35,0.06);

            transition: 0.3s;

            position: relative;
        }

        .menu-card:hover {

            transform: translateY(-6px);

            box-shadow: 0 15px 35px rgba(62,39,35,0.12);
        }

        .menu-top {

            display: flex;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 12px;
        }

        .menu-name {

            font-size: 18px;

            font-weight: bold;

            line-height: 1.3;
        }

        .menu-price {

            color: #a16e46;

            font-weight: bold;

            white-space: nowrap;
        }

        .menu-description {

            color: #82746c;

            font-size: 13px;

            line-height: 1.6;

            margin-bottom: 18px;
        }

        .detail-button {

            display: inline-block;

            color: #5d4037;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;

            padding-bottom: 3px;

            border-bottom: 1px solid #c49a6c;

            transition: 0.3s;
        }

        .detail-button:hover {

            color: #a16e46;

            padding-left: 4px;
        }

        /* ================= FOOTER ================= */

        footer {

            background: #241612;

            color: #b8a69b;

            text-align: center;

            padding: 25px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {

            .menu-grid {

                grid-template-columns: repeat(2, 1fr);
            }

            .hero h1 {

                font-size: 45px;
            }
        }


        @media (max-width: 600px) {

            .navbar {

                padding: 20px;
            }

            .nav-menu {

                gap: 12px;
            }

            .nav-menu a {

                font-size: 13px;
            }

            .hero {

                min-height: 550px;
            }

            .hero h1 {

                font-size: 37px;
            }

            .hero p {

                font-size: 16px;
            }

            .menu-section {

                padding: 60px 20px;
            }

            .menu-grid {

                grid-template-columns: 1fr;
            }

            .category-title h3 {

                font-size: 23px;
            }

            .features {

                flex-direction: column;

                gap: 25px;
            }
        }

    </style>
</head>


<body>


    <!-- ================= NAVBAR ================= -->

   <nav class="navbar-cafe">

    <a href="/" class="logo-cafe">
        ☕ Cafe Kita
    </a>

    <ul class="nav-menu">

        <li>
            <a href="/">Home</a>
        </li>

        <li>
            <a href="#menu">Menu</a>
        </li>


        <li>
            <a href="/cart" class="cart-button">
                🛒
                <span id="cart-count">0</span>
            </a>
        </li>

    </ul>

</nav>



    <!-- ================= HERO ================= -->

    <section class="hero">

    <div class="hero-content">

        <div class="hero-badge">
            ☕ Fresh • Cozy • Delicious
        </div>

        <h1>
            Nikmati Kopi,
            <span>Rasakan Ceritanya.</span>
        </h1>

        <p>
            Temukan berbagai pilihan kopi, teh, cokelat,
            matcha, dan mocktail yang dibuat dengan bahan
            berkualitas untuk menemani setiap momenmu.
        </p>

        <a href="#menu" class="btn-cafe">
            Jelajahi Menu →
        </a>

    </div>

</section>



    <!-- ================= MENU ================= -->

   <section class="menu-section" id="menu">

    <div class="section-heading">

        <div class="section-label">
            Our Menu
        </div>

        <h2>
            Temukan Favoritmu
        </h2>

        <p>
            Pilihan minuman yang dibuat untuk menemani
            hari-harimu.
        </p>

    </div>


        @php
            $groupedMenus = collect($menus)->groupBy('kategori');

            $icons = [
                'Espresso Based' => '☕',
                'Americano Series' => '🧊',
                'Tea Garden' => '🍵',
                'Choco Series' => '🍫',
                'Matcha Series' => '🍃',
                'Non-Coffee' => '🍓',
                'Mocktail' => '🍹'
            ];
        @endphp


        @foreach ($groupedMenus as $kategori => $items)

            <div class="category-section">


                <div class="category-title">

                    <div class="category-icon">

                        {{ $icons[$kategori] ?? '☕' }}

                    </div>

                    <div>

                        <h3>
                            {{ $kategori }}
                        </h3>

                        <p>
                            Pilihan {{ strtolower($kategori) }}
                        </p>

                    </div>

                </div>


                <div class="menu-grid">


                    @foreach ($items as $menu)

                        <div class="menu-card">


                            <div class="menu-top">

                                <div class="menu-name">
                                    {{ $menu['nama'] }}
                                </div>

                                <div class="menu-price">
                                    Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                                </div>

                            </div>


                            <p class="menu-description">

                                {{ $menu['deskripsi'] }}

                            </p>


                            <div class="menu-bottom">

                            <a
                                href="/menu/{{ $menu['id'] }}"
                                class="detail-button"
                            >
                            Lihat Detail →
                            </a>

                            <button
                                type="button"
                                class="add-cart"
                                data-id="{{ $menu['id'] }}"
                                data-name="{{ $menu['nama'] }}"
                                data-price="{{ $menu['harga'] }}"
                            >
                            +
                            </button>

                            </div>


                        </div>

                    @endforeach


                </div>


            </div>

        @endforeach


    </section>

    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © 2026 Cafe Kita • Dibuat dengan ☕
        </p>

    </footer>

<script src="{{ asset('js/cafe.js') }}"></script>


</body>

</html>