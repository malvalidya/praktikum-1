<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [

            // ESPRESSO BASED
            [
                'id' => 1,
                'nama' => 'Espresso',
                'kategori' => 'Espresso Based',
                'harga' => 15000,
                'deskripsi' => 'Espresso dengan cita rasa kopi yang kuat dan autentik.'
            ],

            [
                'id' => 2,
                'nama' => 'Brown Sugar Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 25000,
                'deskripsi' => 'Perpaduan kopi dengan manisnya brown sugar.'
            ],

            [
                'id' => 3,
                'nama' => 'Spanish Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Espresso dengan perpaduan susu yang creamy dan manis.'
            ],

            [
                'id' => 4,
                'nama' => 'Cappuccino',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Espresso dengan susu dan foam lembut di atasnya.'
            ],

            [
                'id' => 5,
                'nama' => 'Coffee Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi espresso dengan campuran susu yang lembut.'
            ],

            [
                'id' => 6,
                'nama' => 'Cookies Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Latte dengan perpaduan rasa cookies yang manis.'
            ],

            [
                'id' => 7,
                'nama' => 'Cotton Candy Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan perpaduan rasa manis cotton candy.'
            ],

            [
                'id' => 8,
                'nama' => 'Salted Caramel Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Latte creamy dengan perpaduan salted caramel.'
            ],

            [
                'id' => 9,
                'nama' => 'Irish Cream Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan rasa Irish cream yang lembut.'
            ],

            [
                'id' => 10,
                'nama' => 'Butterscotch Sea Salt Cream',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan butterscotch dan sea salt cream.'
            ],

            [
                'id' => 11,
                'nama' => 'Coffee KO',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Minuman kopi dengan karakter rasa yang khas.'
            ],

            [
                'id' => 12,
                'nama' => 'Coffee KO-LAK',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Perpaduan kopi dengan rasa yang unik dan nikmat.'
            ],

            [
                'id' => 13,
                'nama' => 'Mocha Latte',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Perpaduan espresso, susu, dan cokelat.'
            ],

            [
                'id' => 14,
                'nama' => 'Affogato',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Espresso yang dipadukan dengan gelato.'
            ],

            [
                'id' => 15,
                'nama' => 'Peanut Butter Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Kopi dengan perpaduan rasa peanut butter yang khas.'
            ],


            // AMERICANO SERIES
            [
                'id' => 16,
                'nama' => 'Americano',
                'kategori' => 'Americano Series',
                'harga' => 18000,
                'deskripsi' => 'Espresso dengan tambahan air untuk rasa kopi yang ringan.'
            ],

            [
                'id' => 17,
                'nama' => 'Mango Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan perpaduan rasa mangga yang segar.'
            ],

            [
                'id' => 18,
                'nama' => 'Lychee Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan rasa leci yang menyegarkan.'
            ],

            [
                'id' => 19,
                'nama' => 'Peach Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan perpaduan rasa peach.'
            ],


            // TEA GARDEN
            [
                'id' => 20,
                'nama' => 'Lychee Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan rasa leci yang segar.'
            ],

            [
                'id' => 21,
                'nama' => 'Lemon Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan perpaduan lemon yang menyegarkan.'
            ],

            [
                'id' => 22,
                'nama' => 'Mint Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan sensasi mint yang menyegarkan.'
            ],

            [
                'id' => 23,
                'nama' => 'Lemongrass Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Teh dengan aroma dan rasa lemongrass.'
            ],

            [
                'id' => 24,
                'nama' => 'Nano Nano Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Teh dengan perpaduan rasa manis dan segar.'
            ],

            [
                'id' => 25,
                'nama' => 'Ahmad Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Pilihan teh dalam tea bag dengan beberapa varian.'
            ],


            // CHOCO SERIES
            [
                'id' => 26,
                'nama' => 'Choco Banana',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan perpaduan rasa pisang.'
            ],

            [
                'id' => 27,
                'nama' => 'Choco Hazelnut',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan rasa hazelnut yang creamy.'
            ],

            [
                'id' => 28,
                'nama' => 'Choco Peanut Butter',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan perpaduan peanut butter.'
            ],

            [
                'id' => 29,
                'nama' => 'Choco Len Signature',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Minuman cokelat signature dengan cita rasa khas.'
            ],


            // MATCHA SERIES
            [
                'id' => 30,
                'nama' => 'Matchapresso',
                'kategori' => 'Matcha Series',
                'harga' => 28000,
                'deskripsi' => 'Perpaduan matcha dengan espresso.'
            ],

            [
                'id' => 31,
                'nama' => 'Matcha Latte',
                'kategori' => 'Matcha Series',
                'harga' => 30000,
                'deskripsi' => 'Matcha dengan susu creamy yang lembut.'
            ],

            [
                'id' => 32,
                'nama' => 'Coconut Matcha',
                'kategori' => 'Matcha Series',
                'harga' => 34000,
                'deskripsi' => 'Matcha dengan perpaduan rasa kelapa yang menyegarkan.'
            ],

            [
                'id' => 33,
                'nama' => 'Choco Matcha',
                'kategori' => 'Matcha Series',
                'harga' => 38000,
                'deskripsi' => 'Perpaduan matcha dan cokelat dalam satu minuman.'
            ],


            // NON-COFFEE
            [
                'id' => 34,
                'nama' => 'Strawberry Summer',
                'kategori' => 'Non-Coffee',
                'harga' => 28000,
                'deskripsi' => 'Minuman strawberry yang segar dan cocok untuk musim panas.'
            ],

            [
                'id' => 35,
                'nama' => 'Lychee Summer',
                'kategori' => 'Non-Coffee',
                'harga' => 28000,
                'deskripsi' => 'Minuman leci dengan rasa segar dan ringan.'
            ],

            [
                'id' => 36,
                'nama' => 'Klepon Latte',
                'kategori' => 'Non-Coffee',
                'harga' => 34000,
                'deskripsi' => 'Latte dengan cita rasa khas klepon Indonesia.'
            ],


            // MOCKTAIL
            [
                'id' => 37,
                'nama' => 'Mango Breeze',
                'kategori' => 'Mocktail',
                'harga' => 26000,
                'deskripsi' => 'Mocktail mangga dengan rasa segar dan fruity.'
            ],

            [
                'id' => 38,
                'nama' => 'Sun Rise',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail dengan perpaduan rasa manis dan segar.'
            ],

            [
                'id' => 39,
                'nama' => 'Green Aurora',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail segar dengan tampilan warna yang menarik.'
            ],

            [
                'id' => 40,
                'nama' => 'Lychee Paradise',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail leci dengan rasa manis dan menyegarkan.'
            ],

            [
                'id' => 41,
                'nama' => 'Legend Mojito',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail dengan sensasi mojito yang menyegarkan.'
            ],

            [
                'id' => 42,
                'nama' => 'Sparkling Blue Ocean',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail sparkling dengan tampilan biru yang menarik.'
            ]

        ];

        return view('menu.index', compact('menus'));
    }


    public function detail($id)
    {
        $menus = $this->getMenus();

        $menu = collect($menus)->firstWhere('id', $id);

        if (!$menu) {
            abort(404);
        }

        return view('menu.detail', compact('menu'));
    }


    private function getMenus()
    {
        return [

            [
                'id' => 1,
                'nama' => 'Espresso',
                'kategori' => 'Espresso Based',
                'harga' => 15000,
                'deskripsi' => 'Espresso dengan cita rasa kopi yang kuat dan autentik.'
            ],

            [
                'id' => 2,
                'nama' => 'Brown Sugar Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 25000,
                'deskripsi' => 'Perpaduan kopi dengan manisnya brown sugar.'
            ],

            [
                'id' => 3,
                'nama' => 'Spanish Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Espresso dengan perpaduan susu yang creamy dan manis.'
            ],

            [
                'id' => 4,
                'nama' => 'Cappuccino',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Espresso dengan susu dan foam lembut di atasnya.'
            ],

            [
                'id' => 5,
                'nama' => 'Coffee Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi espresso dengan campuran susu yang lembut.'
            ],

            [
                'id' => 6,
                'nama' => 'Cookies Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Latte dengan perpaduan rasa cookies yang manis.'
            ],

            [
                'id' => 7,
                'nama' => 'Cotton Candy Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan perpaduan rasa manis cotton candy.'
            ],

            [
                'id' => 8,
                'nama' => 'Salted Caramel Latte',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Latte creamy dengan perpaduan salted caramel.'
            ],

            [
                'id' => 9,
                'nama' => 'Irish Cream Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan rasa Irish cream yang lembut.'
            ],

            [
                'id' => 10,
                'nama' => 'Butterscotch Sea Salt Cream',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Kopi dengan butterscotch dan sea salt cream.'
            ],

            [
                'id' => 11,
                'nama' => 'Coffee KO',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Minuman kopi dengan karakter rasa yang khas.'
            ],

            [
                'id' => 12,
                'nama' => 'Coffee KO-LAK',
                'kategori' => 'Espresso Based',
                'harga' => 30000,
                'deskripsi' => 'Perpaduan kopi dengan rasa yang unik dan nikmat.'
            ],

            [
                'id' => 13,
                'nama' => 'Mocha Latte',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Perpaduan espresso, susu, dan cokelat.'
            ],

            [
                'id' => 14,
                'nama' => 'Affogato',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Espresso yang dipadukan dengan gelato.'
            ],

            [
                'id' => 15,
                'nama' => 'Peanut Butter Coffee',
                'kategori' => 'Espresso Based',
                'harga' => 34000,
                'deskripsi' => 'Kopi dengan perpaduan rasa peanut butter yang khas.'
            ],

            [
                'id' => 16,
                'nama' => 'Americano',
                'kategori' => 'Americano Series',
                'harga' => 18000,
                'deskripsi' => 'Espresso dengan tambahan air untuk rasa kopi yang ringan.'
            ],

            [
                'id' => 17,
                'nama' => 'Mango Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan perpaduan rasa mangga yang segar.'
            ],

            [
                'id' => 18,
                'nama' => 'Lychee Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan rasa leci yang menyegarkan.'
            ],

            [
                'id' => 19,
                'nama' => 'Peach Americano',
                'kategori' => 'Americano Series',
                'harga' => 26000,
                'deskripsi' => 'Americano dengan perpaduan rasa peach.'
            ],

            [
                'id' => 20,
                'nama' => 'Lychee Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan rasa leci yang segar.'
            ],

            [
                'id' => 21,
                'nama' => 'Lemon Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan perpaduan lemon yang menyegarkan.'
            ],

            [
                'id' => 22,
                'nama' => 'Mint Tea',
                'kategori' => 'Tea Garden',
                'harga' => 16000,
                'deskripsi' => 'Teh dengan sensasi mint yang menyegarkan.'
            ],

            [
                'id' => 23,
                'nama' => 'Lemongrass Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Teh dengan aroma dan rasa lemongrass.'
            ],

            [
                'id' => 24,
                'nama' => 'Nano Nano Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Teh dengan perpaduan rasa manis dan segar.'
            ],

            [
                'id' => 25,
                'nama' => 'Ahmad Tea',
                'kategori' => 'Tea Garden',
                'harga' => 19000,
                'deskripsi' => 'Pilihan teh dalam tea bag dengan beberapa varian.'
            ],

            [
                'id' => 26,
                'nama' => 'Choco Banana',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan perpaduan rasa pisang.'
            ],

            [
                'id' => 27,
                'nama' => 'Choco Hazelnut',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan rasa hazelnut yang creamy.'
            ],

            [
                'id' => 28,
                'nama' => 'Choco Peanut Butter',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Cokelat dengan perpaduan peanut butter.'
            ],

            [
                'id' => 29,
                'nama' => 'Choco Len Signature',
                'kategori' => 'Choco Series',
                'harga' => 34000,
                'deskripsi' => 'Minuman cokelat signature dengan cita rasa khas.'
            ],

            [
                'id' => 30,
                'nama' => 'Matchapresso',
                'kategori' => 'Matcha Series',
                'harga' => 28000,
                'deskripsi' => 'Perpaduan matcha dengan espresso.'
            ],

            [
                'id' => 31,
                'nama' => 'Matcha Latte',
                'kategori' => 'Matcha Series',
                'harga' => 30000,
                'deskripsi' => 'Matcha dengan susu creamy yang lembut.'
            ],

            [
                'id' => 32,
                'nama' => 'Coconut Matcha',
                'kategori' => 'Matcha Series',
                'harga' => 34000,
                'deskripsi' => 'Matcha dengan perpaduan rasa kelapa yang menyegarkan.'
            ],

            [
                'id' => 33,
                'nama' => 'Choco Matcha',
                'kategori' => 'Matcha Series',
                'harga' => 38000,
                'deskripsi' => 'Perpaduan matcha dan cokelat dalam satu minuman.'
            ],

            [
                'id' => 34,
                'nama' => 'Strawberry Summer',
                'kategori' => 'Non-Coffee',
                'harga' => 28000,
                'deskripsi' => 'Minuman strawberry yang segar dan cocok untuk musim panas.'
            ],

            [
                'id' => 35,
                'nama' => 'Lychee Summer',
                'kategori' => 'Non-Coffee',
                'harga' => 28000,
                'deskripsi' => 'Minuman leci dengan rasa segar dan ringan.'
            ],

            [
                'id' => 36,
                'nama' => 'Klepon Latte',
                'kategori' => 'Non-Coffee',
                'harga' => 34000,
                'deskripsi' => 'Latte dengan cita rasa khas klepon Indonesia.'
            ],

            [
                'id' => 37,
                'nama' => 'Mango Breeze',
                'kategori' => 'Mocktail',
                'harga' => 26000,
                'deskripsi' => 'Mocktail mangga dengan rasa segar dan fruity.'
            ],

            [
                'id' => 38,
                'nama' => 'Sun Rise',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail dengan perpaduan rasa manis dan segar.'
            ],

            [
                'id' => 39,
                'nama' => 'Green Aurora',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail segar dengan tampilan warna yang menarik.'
            ],

            [
                'id' => 40,
                'nama' => 'Lychee Paradise',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail leci dengan rasa manis dan menyegarkan.'
            ],

            [
                'id' => 41,
                'nama' => 'Legend Mojito',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail dengan sensasi mojito yang menyegarkan.'
            ],

            [
                'id' => 42,
                'nama' => 'Sparkling Blue Ocean',
                'kategori' => 'Mocktail',
                'harga' => 28000,
                'deskripsi' => 'Mocktail sparkling dengan tampilan biru yang menarik.'
            ]

        ];
    }
}