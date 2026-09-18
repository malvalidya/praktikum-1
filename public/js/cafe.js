document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       DATA KERANJANG
    ========================= */

    let cart = JSON.parse(
        localStorage.getItem("cafeCart")
    ) || [];


    /* =========================
       ANIMASI CARD SAAT SCROLL
    ========================= */

    const cards =
        document.querySelectorAll(".menu-card");

    if (cards.length > 0) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("show");

                        }

                    });

                },
                {
                    threshold: 0.15
                }
            );

        cards.forEach(function (card) {
            observer.observe(card);
        });

    }


    /* =========================
       UPDATE JUMLAH CART
    ========================= */

    function updateCart() {

        const cartCount =
            document.querySelector("#cart-count");

        if (!cartCount) {
            return;
        }

        const totalItems =
            cart.reduce(
                function (total, item) {
                    return total + item.quantity;
                },
                0
            );

        cartCount.textContent = totalItems;
    }


    updateCart();


    /* =========================
       FORMAT RUPIAH
    ========================= */

    function formatRupiah(number) {

        return new Intl.NumberFormat("id-ID")
            .format(number);

    }


    /* =========================
       TOMBOL TAMBAH KE CART
    ========================= */

    document
        .querySelectorAll(".add-cart")
        .forEach(function (button) {

            button.addEventListener(
                "click",
                function () {

                    const id =
                        this.dataset.id;

                    const name =
                        this.dataset.name;

                    const price =
                        parseInt(
                            this.dataset.price
                        );


                    const existingItem =
                        cart.find(
                            function (item) {
                                return item.id == id;
                            }
                        );


                    if (existingItem) {

                        existingItem.quantity++;

                    } else {

                        cart.push({

                            id: id,

                            name: name,

                            price: price,

                            quantity: 1

                        });

                    }


                    localStorage.setItem(
                        "cafeCart",
                        JSON.stringify(cart)
                    );


                    updateCart();


                    showToast(
                        name +
                        " berhasil ditambahkan 🛒"
                    );

                }
            );

        });


    /* =========================
       TOAST NOTIFICATION
    ========================= */

    function showToast(message) {

        const toast =
            document.createElement("div");

        toast.className =
            "toast-cafe";

        toast.textContent =
            message;


        document.body.appendChild(toast);


        setTimeout(function () {

            toast.classList.add("show");

        }, 50);


        setTimeout(function () {

            toast.classList.remove("show");


            setTimeout(function () {

                toast.remove();

            }, 300);

        }, 2500);

    }


    /* =========================
       HALAMAN CART
    ========================= */

    const cartContent =
        document.querySelector("#cart-content");


    if (cartContent) {

        renderCart();

    }


    function renderCart() {

        if (cart.length === 0) {

            cartContent.innerHTML = `

                <div class="empty-cart">

                    <div class="empty-cart-icon">
                        🛒
                    </div>

                    <h2>
                        Keranjang Masih Kosong
                    </h2>

                    <p>
                        Yuk pilih menu favoritmu
                        terlebih dahulu.
                    </p>

                    <a href="/" class="btn-cafe">
                        Lihat Menu →
                    </a>

                </div>

            `;

            return;

        }


        let total = 0;

        let html = `

            <div class="cart-layout">

                <div class="cart-items">

        `;


        cart.forEach(function (item) {

            const subtotal =
                item.price * item.quantity;


            total += subtotal;


            html += `

                <div class="cart-item">

                    <div class="cart-item-icon">
                        ☕
                    </div>


                    <div class="cart-item-info">

                        <h3>
                            ${item.name}
                        </h3>

                        <p>
                            Rp${formatRupiah(item.price)}
                        </p>

                    </div>


                    <div class="quantity-control">

                        <button
                            class="quantity-btn"
                            onclick="decreaseItem('${item.id}')"
                        >
                            −
                        </button>


                        <span>
                            ${item.quantity}
                        </span>


                        <button
                            class="quantity-btn"
                            onclick="increaseItem('${item.id}')"
                        >
                            +
                        </button>

                    </div>


                    <div class="cart-subtotal">

                        Rp${formatRupiah(subtotal)}

                    </div>


                    <button
                        class="remove-item"
                        onclick="removeItem('${item.id}')"
                        title="Hapus"
                    >
                        ×
                    </button>

                </div>

            `;

        });


        html += `

                </div>


                <div class="cart-summary">

                    <h2>
                        Ringkasan Pesanan
                    </h2>


                    <div class="summary-row">

                        <span>
                            Jumlah Item
                        </span>

                        <span>
                            ${
                                cart.reduce(
                                    function (
                                        total,
                                        item
                                    ) {
                                        return total +
                                            item.quantity;
                                    },
                                    0
                                )
                            }
                        </span>

                    </div>


                    <div class="summary-line"></div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            Rp${formatRupiah(total)}
                        </strong>

                    </div>


                    <button
                        class="checkout-btn"
                        onclick="goToCheckout()"
                    >
                        Checkout →
                    </button>


                    <a
                        href="/"
                        class="continue-shopping"
                    >
                        ← Tambah Menu Lain
                    </a>

                </div>

            </div>

        `;


        cartContent.innerHTML = html;

    }


    /* =========================
       TAMBAH JUMLAH ITEM
    ========================= */

    window.increaseItem =
        function (id) {

            const item =
                cart.find(function (item) {

                    return item.id == id;

                });


            if (item) {

                item.quantity++;

            }


            saveCart();

            renderCart();

        };


    /* =========================
       KURANGI JUMLAH ITEM
    ========================= */

    window.decreaseItem =
        function (id) {

            const item =
                cart.find(function (item) {

                    return item.id == id;

                });


            if (!item) {
                return;
            }


            if (item.quantity > 1) {

                item.quantity--;

            } else {

                cart =
                    cart.filter(function (item) {

                        return item.id != id;

                    });

            }


            saveCart();

            renderCart();

        };


    /* =========================
       HAPUS ITEM
    ========================= */

    window.removeItem =
        function (id) {

            cart =
                cart.filter(function (item) {

                    return item.id != id;

                });


            saveCart();

            renderCart();

        };


    /* =========================
       SIMPAN CART
    ========================= */

    function saveCart() {

        localStorage.setItem(
            "cafeCart",
            JSON.stringify(cart)
        );

        updateCart();

    }


    /* =========================
       KE CHECKOUT
    ========================= */

    window.goToCheckout =
        function () {

            if (cart.length === 0) {

                alert(
                    "Keranjang masih kosong."
                );

                return;

            }


            window.location.href =
                "/checkout";

        };


    /* =========================
       CHECKOUT
    ========================= */

    const checkoutItems =
        document.querySelector(
            "#checkout-items"
        );


    if (checkoutItems) {

        renderCheckout();

    }


    function renderCheckout() {

        const totalElement =
            document.querySelector(
                "#checkout-total"
            );


        if (cart.length === 0) {

            checkoutItems.innerHTML = `

                <p style="color:#81746b;">
                    Keranjang masih kosong.
                </p>

            `;

            return;

        }


        let total = 0;

        let html = "";


        cart.forEach(function (item) {

            const subtotal =
                item.price *
                item.quantity;


            total += subtotal;


            html += `

                <div class="checkout-item">

                    <div>

                        <div
                            class="checkout-item-name"
                        >
                            ${item.name}
                        </div>


                        <div
                            class="checkout-item-qty"
                        >
                            ${item.quantity}
                            ×
                            Rp${formatRupiah(item.price)}
                        </div>

                    </div>


                    <div
                        class="checkout-item-price"
                    >
                        Rp${formatRupiah(subtotal)}
                    </div>

                </div>

            `;

        });


        checkoutItems.innerHTML =
            html;


        totalElement.textContent =
            "Rp" +
            formatRupiah(total);

    }


    /* =========================
       BUAT PESANAN
    ========================= */

   window.createOrder = function () {

    const name =
        document.querySelector("#customer-name").value.trim();

    const table =
        document.querySelector("#table-number").value.trim();

    if (!name) {
        alert("Silakan masukkan nama pemesan.");
        return;
    }

    if (!table) {
        alert("Silakan masukkan nomor meja.");
        return;
    }

    if (cart.length === 0) {
        alert("Keranjang masih kosong.");
        window.location.href = "/";
        return;
    }

    const payment =
        document.querySelector(
            'input[name="payment"]:checked'
        ).value;

    localStorage.setItem(
        "customerName",
        name
    );

    localStorage.setItem(
        "tableNumber",
        table
    );

    localStorage.setItem(
        "paymentMethod",
        payment
    );


    /* =========================
       BAYAR DI KASIR
    ========================= */

    if (payment === "cash") {

        const queueNumber =
            Math.floor(Math.random() * 90) + 10;

        const queueCode =
            "A-" + queueNumber;

        localStorage.setItem(
            "queueNumber",
            queueCode
        );

        localStorage.setItem(
            "orderStatus",
            "Bayar di Kasir"
        );

        window.location.href = "/success";

        return;
    }


    /* =========================
       QRIS
    ========================= */

    window.location.href = "/payment";

};


    /* =========================
       PAYMENT
    ========================= */

    const paymentTotal =
        document.querySelector(
            "#payment-total"
        );


    if (paymentTotal) {

        let paymentAmount = 0;


        cart.forEach(function (item) {

            paymentAmount +=
                item.price *
                item.quantity;

        });


        paymentTotal.textContent =
            "Rp" +
            formatRupiah(paymentAmount);

    }


    /* =========================
       SELESAI PEMBAYARAN
    ========================= */

    window.finishPayment =
        function () {

            if (cart.length === 0) {

                alert(
                    "Pesanan tidak ditemukan."
                );

                window.location.href =
                    "/";

                return;

            }


            /* Nomor antrean simulasi */

            const queueNumber =
                Math.floor(
                    Math.random() * 90
                ) + 10;


            const queueCode =
                "A-" +
                queueNumber;


            localStorage.setItem(
                "queueNumber",
                queueCode
            );


            localStorage.setItem(
                "orderStatus",
                "Pembayaran Berhasil"
            );


            /*
             * Pesanan selesai,
             * kosongkan keranjang.
             */

            localStorage.removeItem(
                "cafeCart"
            );


            window.location.href =
                "/success";

        };


    /* =========================
       SUCCESS PAGE
    ========================= */

    const queueNumberElement =
        document.querySelector(
            "#queue-number"
        );


    if (queueNumberElement) {

        const queue =
            localStorage.getItem(
                "queueNumber"
            );


        const name =
            localStorage.getItem(
                "customerName"
            );


        const table =
            localStorage.getItem(
                "tableNumber"
            );


        if (queue) {

            queueNumberElement.textContent =
                queue;

        }


        if (name) {

            document.querySelector(
                "#success-name"
            ).textContent =
                name;

        }


        if (table) {

            document.querySelector(
                "#success-table"
            ).textContent =
                "Meja " +
                table;

        }

    }

});