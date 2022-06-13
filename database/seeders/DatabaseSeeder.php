<?php

namespace Database\Seeders;

use App\Http\Controllers\UsersController;
use App\Http\Middleware\Admin;
use App\Models\Category_model;
use App\Models\ProductAtrr_model;
use App\Models\Products_model;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'admin' => 1,
            'address' => "Adress admin",
            'city' => "City Admin",
            'state' => "State Admin",
            'pincode' => "pincode admin",
            'mobile' => "082276728209"
        ]);

        User::create([
            'name' => 'Budi Ikfini',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi123'),
            'admin' => 1,
            'address' => "JL merak no 1 RT 4 RW 5",
            'city' => "Banten",
            'state' => "Indonesia",
            'pincode' => "242442",
            'mobile' => "0822777672312"
        ]);

        //create category
        Category_model::create([
            'parent_id' => 0,
            'name' => "Fashion Pria",
            'description' => "Produk pakaian pira yang bisa dipakai untu kebutuhan sehari-jari",
            'url' => "http://fashionpria.com",
            'status' => 1
        ]);

        Category_model::create([
            'parent_id' => 0,
            'name' => "Fashion Wanita",
            'description' => "Produk pakaian wanita yang bisa dipakai untu kebutuhan sehari-jari",
            'url' => "http://olahraga.com",
            'status' => 1
        ]);

        Category_model::create([
            'parent_id' => 0,
            'name' => "Olahraga",
            'description' => "Produk yang dapat dipakai untuk kebutuhan olahraga",
            'url' => "http://olahraga.com",
            'status' => 1
        ]);

        //Fashion Pria

        //Produk1-FP
        Products_model::create([
            'id' => 1,
            'categories_id' => 1,
            'p_name' => "Kaos Polo Shirt Pria Kerah Chino",
            'p_code' => "FP-1",
            'p_color' => "Hitam",
            'description' => "Polo Shirt Original Premium Jersey Cotton Mix
            Matsuda - Your Everyday Premium Clothing
            Bahan premium comfort",
            'price' => 100000,
            'image' => 'fp-1.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 1,
            'sku' => "FP1-S",
            'size' => "S",
            'price' => 100000,
            'stock' => 10
        ]);
        ProductAtrr_model::create([
            'products_id' => 1,
            'sku' => "FP1-L",
            'size' => "L",
            'price' => 150000,
            'stock' => 15
        ]);
        ProductAtrr_model::create([
            'products_id' => 1,
            'sku' => "FP1-XL",
            'size' => "XL",
            'price' => 200000,
            'stock' => 20
        ]);

        //Produk2-FP
        Products_model::create([
            'id' => 2,
            'categories_id' => 1,
            'p_name' => "Kemeja Polos Panjang Hitam Kemeja Formal Slimfit",
            'p_code' => "FP-2",
            'p_color' => "Hitam",
            'description' => "VM Kemeja Polos Panjang pria slimfit
            Bahan katun
            Pola Slimfit size
            Krah slim
            Tidak ber-saku - polos
            Cocok dipakai untuk acara formal - casual maupun nonformalt",
            'price' => 200000,
            'image' => 'fp-2.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 2,
            'sku' => "FP2-S",
            'size' => "S",
            'price' => 200000,
            'stock' => 10
        ]);
        ProductAtrr_model::create([
            'products_id' => 2,
            'sku' => "FP2-L",
            'size' => "L",
            'price' => 230000,
            'stock' => 15
        ]);
        ProductAtrr_model::create([
            'products_id' => 2,
            'sku' => "FP2-XL",
            'size' => "XL",
            'price' => 240000,
            'stock' => 20
        ]);
        

        //Produk3-FP
        Products_model::create([
            'id' => 3,
            'categories_id' => 1,
            'p_name' => "Sepatu Pantofel Karet Merk Sankyo",
            'p_code' => "FP-3",
            'p_color' => "Hitam",
            'description' => "Sepatu Pantofel karet merk Sankyo design baru yang lebih modern dan casual. bahan lentur dan tidak mudah sobek, cocok untuk kegiatan sehari-hari atau untuk kerja. Juga cocok untuk hujan",
            'price' => 500000,
            'image' => 'fp-3.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 3,
            'sku' => "FP3-39",
            'size' => "39",
            'price' => 500000,
            'stock' => 60
        ]);
        ProductAtrr_model::create([
            'products_id' => 3,
            'sku' => "FP3-40",
            'size' => "40",
            'price' => 500000,
            'stock' => 70
        ]);
        ProductAtrr_model::create([
            'products_id' => 3,
            'sku' => "FP3-43",
            'size' => "43",
            'price' => 530000,
            'stock' => 50
        ]);

         //Produk4-FP
         Products_model::create([
            'id' => 4,
            'categories_id' => 1,
            'p_name' => "Dailyoutfits Hoodie Jumper Limitted Editions",
            'p_code' => "FP-4",
            'p_color' => "Hitam",
            'description' => "Hoodie bertema keinginan dan kemauan untuk bangkit dari keterpurukan di tengah krisis dan kondisi bertahan hidup bersama semua akan jadi lebih baik menjadi Campaign kami di Pertengahan tahun ini.",
            'price' => 450000,
            'image' => 'fp-4.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 4,
            'sku' => "FP4-S",
            'size' => "S",
            'price' => 450000,
            'stock' => 60
        ]);
        ProductAtrr_model::create([
            'products_id' => 4,
            'sku' => "FP4-L",
            'size' => "L",
            'price' => 450000,
            'stock' => 70
        ]);
        ProductAtrr_model::create([
            'products_id' => 4,
            'sku' => "FP4-XL",
            'size' => "XL",
            'price' => 470000,
            'stock' => 50
        ]);

        //Produk5-FP
        Products_model::create([
            'id' => 5,
            'categories_id' => 1,
            'p_name' => "New Era 940AF NY Yankee Cotton Damage Men's Cap",
            'p_code' => "FP-5",
            'p_color' => "Hitam",
            'description' => "The New Era A Frame 9FORTY Adjustable Cap features a distressed New Era patch at the front panels and an adjustable snapback closure at the rear.",
            'price' => 300000,
            'image' => 'fp-5.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 5,
            'sku' => "FP5-AS",
            'size' => "All Size",
            'price' => 300000,
            'stock' => 60
        ]);

          //Produk6-FP
          Products_model::create([
            'id' => 12,
            'categories_id' => 1,
            'p_name' => "Grey Jack/ Kacamata Hitam Pria /fashion Sunglasses /polarized 1219 - C1blk glossy",
            'p_code' => "FP-6",
            'p_color' => "Hitam",
            'description' => "Grey Jack adalah salah satu merek kacamata terkemuka di dunia. Dalam beberapa tahun Grey Jack menjadi populer dengan berbagai klien dengan grosir dan ritel di seluruh dunia.terutama di Amerika Serikat, timur tengah , india, filipina, dll.",
            'price' => 350000,
            'image' => 'fp-6.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 12,
            'sku' => "FP6-AS",
            'size' => "All Size",
            'price' => 350000,
            'stock' => 80
        ]);

        //Produk1-FW-1
        Products_model::create([
            'id' => 6,
            'categories_id' => 2,
            'p_name' => "TAS SELEMPANG WANITA | LILY BAG | TAS FASHION WANITA - Putih",
            'p_code' => "FW-1",
            'p_color' => "Hijau",
            'description' => "TAS WANITA IMPORT LILY BAG | TAS FASHION WANITA

            SIZE : 17x6x12.5 CM
            BAHAN : KULIT SINTETIS
            TALI PANJANG : KULIT SINTETIS
            TUTUP : BESI EMAS (DIPUTAR)
            PACKING PLASTIK
            BERAT 300 GRAM.",
            'price' => 200000,
            'image' => 'fw-1.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 6,
            'sku' => "FW1-AS",
            'size' => "All Size",
            'price' => 200000,
            'stock' => 70
        ]);

        //Produk2-FW-2
        Products_model::create([
            'id' => 7,
            'categories_id' => 2,
            'p_name' => "Salestockfashion OT Hem Babol Big Size Fashion Wanita / Atasan Wanita",
            'p_code' => "FW-2",
            'p_color' => "Coklat",
            'description' => "HEM BABOL UKURAN L
            Bahan moscrepe tebal,
            fit to L,
            LD100,
            P65,
            dpn kancing full good quality",
            'price' => 150000,
            'image' => 'fw-2.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 7,
            'sku' => "FW2-L",
            'size' => "L",
            'price' => 150000,
            'stock' => 70
        ]);
        ProductAtrr_model::create([
            'products_id' => 7,
            'sku' => "FW2-XL",
            'size' => "XL",
            'price' => 250000,
            'stock' => 70
        ]);

        //Produk3-FW-3
        Products_model::create([
            'id' => 8,
            'categories_id' => 2,
            'p_name' => "Celana Kantor Wanita Celana Kerja Wanita Formal Casual Fashion",
            'p_code' => "FW-3",
            'p_color' => "Hitam",
            'description' => "Celana Formal yang Modis Dengan Warna dan Bahan yang Berkualitas,
            Cocok untuk Kegiatan Formal Serta dapat Meningkatkan Rasa Percaya Diri dalam Profesionalitas Pekerjaan Anda
            Dengan Bahan yang Terbuat dari GRISELLA IMPORT Sehingga Anda Tetap Bebas Bergerak dan Tetap Merasa Sejuk Selama Pemakaian, Bahkan Saat Cuaca Panas Sekalipun.
            Sangat Dibutuhkan Bagi Anda yang Ingin Berpenampilan Cantik dan Menarik.
            Bahan Terbaik Untuk Busana Kerja, Lentur, Adem, Tidak Mudah Kusut",
            'price' => 300000,
            'image' => 'fw-3.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 8,
            'sku' => "FW3-L",
            'size' => "L",
            'price' => 300000,
            'stock' => 50
        ]);
        ProductAtrr_model::create([
            'products_id' => 8,
            'sku' => "FW3-XL",
            'size' => "XL",
            'price' => 350000,
            'stock' => 30
        ]);

        //Produk4-FW-4
        Products_model::create([
            'id' => 9,
            'categories_id' => 2,
            'p_name' => "as Shoulder Bag Wanita/Tote Bag/Fashion Wanita/Tas Wanita Import/Tas",
            'p_code' => "FW-4",
            'p_color' => "Putih",
            'description' => "Tas Wanita Elegan Import. Toko ini adalah toko online tas wanita dan tas pria di Jakarta. Semua Tas Handbag Selempang Wanita Elegan Import yang dijual di Toko ini adalah 100% import.",
            'price' => 230000,
            'image' => 'fw-4.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 9,
            'sku' => "FW4-AS",
            'size' => "All Size",
            'price' => 230000,
            'stock' => 43
        ]);

        //Produk5-FW-5
        Products_model::create([
            'id' => 10,
            'categories_id' => 2,
            'p_name' => "Gamis Wanita Syari Maxmara Khimar Dress Jubah Cewek Fashion Muslim",
            'p_code' => "FW-5",
            'p_color' => "Biru",
            'description' => "Karakteristik Kain moscrepe
            * Memiliki tekstur kulit jeruk seperti susunan butiran pasir yang halus
            * Memiliki serat kain yang rapat, tebal, dan tidak menerawang
            * Tidak mudah kusut dan nyaman dikenakan
            * Mudah menyerap keringat
            * Untuk panas atau tidaknya bahan itu tergantung dari suhu daerah/tempat pemakai ya dear
            
            Detail produk
            * Badan depan menggunakan sleting (BUSUI FRIENDLY)
            * Bagian bawah mayung
            * Semua produk kami QC dahulu sebelum dikirim
            * Ada tali pinggangnya ( bisa pisah / bisa menyatu dengan dressnya ya tidak bisa request)",
            'price' => 350000,
            'image' => 'fw-5.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 10,
            'sku' => "FW5-S",
            'size' => "S",
            'price' => 350000,
            'stock' => 30
        ]);
        ProductAtrr_model::create([
            'products_id' => 10,
            'sku' => "FW5-L",
            'size' => "L",
            'price' => 350000,
            'stock' => 50
        ]);
        ProductAtrr_model::create([
            'products_id' => 10,
            'sku' => "FW5-XL",
            'size' => "XL",
            'price' => 400000,
            'stock' => 50
        ]);

        //Produk5-FW-5
        Products_model::create([
            'id' => 11,
            'categories_id' => 2,
            'p_name' => "homedress rayon muslimah fashion wanita maitara/gamis busui",
            'p_code' => "FW-6",
            'p_color' => "Tosca",
            'description' => "-gamis Bahan katun rayon VISCOSE
            -Ukuran Ld 104cm pjg 136cm
            -lingkar rok bwh 230cm
            -gamis kancing depan ( Busui )
            -Tangn karet
            -ada kantong saku
            -Tanpa kerudung",
            'price' => 400000,
            'image' => 'fw-6.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 11,
            'sku' => "FW6-S",
            'size' => "S",
            'price' => 400000,
            'stock' => 30
        ]);
        ProductAtrr_model::create([
            'products_id' => 11,
            'sku' => "FW5-L",
            'size' => "L",
            'price' => 400000,
            'stock' => 50
        ]);
        ProductAtrr_model::create([
            'products_id' => 11,
            'sku' => "FW6-XL",
            'size' => "XL",
            'price' => 450000,
            'stock' => 50
        ]);

        //Produk1-OL
        Products_model::create([
            'id' => 13,
            'categories_id' => 3,
            'p_name' => "PAKAIAN OLAHRAGA PRIA / KAOS OLAHRAGA / ATASAN OLAHRAGA",
            'p_code' => "OL-1",
            'p_color' => "Hitam",
            'description' => "BAJU RUNNING
            KAOS TRAINING
            BAJU GYM FITNESS SLIMFIT ELASTIC PRO COMBAT IMPORT
            
            TSHIRT ORIGINAL 100%
            BAHAN : 100% POLYSTER CRYSTAL SILK BRAND NEW",
            'price' => 200000,
            'image' => 'ol-1.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 13,
            'sku' => "OL-S",
            'size' => "S",
            'price' => 200000,
            'stock' => 30
        ]);
        ProductAtrr_model::create([
            'products_id' => 13,
            'sku' => "OL-L",
            'size' => "L",
            'price' => 250000,
            'stock' => 50
        ]);
        ProductAtrr_model::create([
            'products_id' => 13,
            'sku' => "OL-XL",
            'size' => "XL",
            'price' => 300000,
            'stock' => 50
        ]);

        //Produk2-OL
        Products_model::create([
            'id' => 14,
            'categories_id' => 3,
            'p_name' => "CELANA TRAINING PRIA TRAINING PANTS CELANA JOGGER PRIA OLAHRAGA GYM",
            'p_code' => "OL-2",
            'p_color' => "Hitam",
            'description' => "KETERANGAN PRODUCK UNTUK
            JOGGER SPORT DEWASA PANJANG dan TRACKPANTS SAKU SLETING
            -BAHAN : TERRY
            -SABLON :POLIPLEX",
            'price' => 400000,
            'image' => 'ol-2.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 14,
            'sku' => "OL-L",
            'size' => "L",
            'price' => 400000,
            'stock' => 70
        ]);
        ProductAtrr_model::create([
            'products_id' => 14,
            'sku' => "OL-XL",
            'size' => "XL",
            'price' => 430000,
            'stock' => 40
        ]);

        //Produk3-OL
        Products_model::create([
            'id' => 15,
            'categories_id' => 3,
            'p_name' => "Jaket Parasut Pria Jaket Hoodie Anti Air Jaket Olahraga Outdoor",
            'p_code' => "OL-3",
            'p_color' => "Hitam",
            'description' => "RINCIAN PRODUCK
            - Bahan luar : Parasut
            - Bahan dalam : Hyget/ dry fit ( menyerap keringat )
            - Grafik Logo bordir
            - Kepala Resleting besi
            - Ada penutup kepala/hoodie (tidak bisa dilepas)
            - 2 Saku depan kiri kanan (jenis sleting)",
            'price' => 250000,
            'image' => 'ol-3.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 15,
            'sku' => "OL-L",
            'size' => "L",
            'price' => 250000,
            'stock' => 70
        ]);
        ProductAtrr_model::create([
            'products_id' => 15,
            'sku' => "OL-XL",
            'size' => "XL",
            'price' => 300000,
            'stock' => 74
        ]);

         //Produk4-OL
         Products_model::create([
            'id' => 16,
            'categories_id' => 3,
            'p_name' => "Tas travel bag nike sports olahraga fitness gym futsal bola",
            'p_code' => "OL-4",
            'p_color' => "Hitam",
            'description' => "Material : D1680 dilengkapi busa
            Ukuran : Panjang 52 cm x Tinggi 28 cm x Lebar 25 cm (Panjang tali slempang 120 cm)
            Detail : Bagian bawah lapis busa, jahitan rapi dan kuat
            Penggunaan : Bisa Digendong, Diselempang dan Dijinjing",
            'price' => 250000,
            'image' => 'ol-3.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 16,
            'sku' => "OL-AS",
            'size' => "All Size",
            'price' => 250000,
            'stock' => 90
        ]);

        //Produk5-OL
        Products_model::create([
            'id' => 17,
            'categories_id' => 3,
            'p_name' => "Elfs Tas Ransel Travel Gym Bag Multifungsi 2in1",
            'p_code' => "OL-5",
            'p_color' => "Hitam",
            'description' => "Cordura Series dari Elfs, kali ini mengeluarkan design Tas yang multifungsi untuk berbagai macam aktivitas mu sekaligus. cocok digunakan untuk travel, atau gym, kapasitas ruang sangat luas, bisa muat untuk semua kebutuhan. cara pemakaiannya juga bisa sebagai tas ransel ataupun di tenteng sesuai keperluan",
            'price' => 450000,
            'image' => 'ol-4.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 17,
            'sku' => "OL-AS",
            'size' => "All Size",
            'price' => 450000,
            'stock' => 90
        ]);

        //Produk6-OL
        Products_model::create([
            'id' => 18,
            'categories_id' => 3,
            'p_name' => "Grey jack/Kacamata Olahraga free minus Lens (Futsal,Basket,Badminton)",
            'p_code' => "OL-6",
            'p_color' => "Hitam/Orange",
            'description' => "- Pakai tali karet yg ketat tapi tetap nyaman dan tidak sakit.
            - tali bisa di lepas pasang.
            - Cocok untuk aktivitas berat, olahraga futsal, bersepeda, badminton dll
            - Rubber Band Adjuster (Fleksible Nyaman di pakai)
            - Elastic Rubber string & Adjustable Side Seal (Enak dan sesuai dengan segala jenis bentuk wajah/kepala)
            - Hard Impact Protector (Aman Sekali karena bahannya kuat tahan benturan)",
            'price' => 350000,
            'image' => 'ol-5.jpg'


        ]);
        ProductAtrr_model::create([
            'products_id' => 18,
            'sku' => "OL-AS",
            'size' => "All Size",
            'price' => 350000,
            'stock' => 60
        ]);
        

        
        
        

    }
}
