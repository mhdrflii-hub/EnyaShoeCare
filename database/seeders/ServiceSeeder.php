<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Deep Clean',
                'description' => 'Pembersihan menyeluruh untuk sepatu yang kotor dan membutuhkan perawatan ekstra.',
                'price' => 35000,
                'duration' => '2-3 Hari',
                'image' => 'services/deep-clean.jpg',
                'category' => 'Cleaning',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Fast Clean',
                'description' => 'Layanan cuci sepatu ringan untuk menghilangkan debu dan kotoran sehari-hari.',
                'price' => 25000,
                'duration' => '1-2 Hari',
                'image' => 'services/fast-clean.jpg',
                'category' => 'Cleaning',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Suede Care',
                'description' => 'Perawatan khusus untuk sepatu berbahan suede agar tetap bersih dan terawat.',
                'price' => 40000,
                'duration' => '2-3 Hari',
                'image' => 'services/suede-care.jpg',
                'category' => 'Special Care',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Leather Care',
                'description' => 'Perawatan sepatu kulit untuk membersihkan dan menjaga kualitas bahan kulit.',
                'price' => 45000,
                'duration' => '2-3 Hari',
                'image' => 'services/leather-care.jpg',
                'category' => 'Special Care',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Whitening',
                'description' => 'Perawatan khusus untuk membantu mengembalikan tampilan putih pada sepatu.',
                'price' => 40000,
                'duration' => '2-3 Hari',
                'image' => 'services/whitening.jpg',
                'category' => 'Treatment',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Unyellowing',
                'description' => 'Treatment untuk membantu mengurangi warna kuning pada bagian sol sepatu.',
                'price' => 50000,
                'duration' => '3-4 Hari',
                'image' => 'services/unyellowing.jpg',
                'category' => 'Treatment',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Repaint',
                'description' => 'Pengecatan ulang sepatu untuk memperbarui warna dan tampilan sepatu.',
                'price' => 75000,
                'duration' => '4-5 Hari',
                'image' => 'services/repaint.jpg',
                'category' => 'Repair',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Sole Treatment',
                'description' => 'Perawatan bagian sol sepatu agar terlihat lebih bersih dan terawat.',
                'price' => 30000,
                'duration' => '2-3 Hari',
                'image' => 'services/repaint-midsole.jpg',
                'category' => 'Treatment',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Helmet Cleaning',
                'description' => 'Layanan pembersihan helm agar tetap bersih dan nyaman digunakan.',
                'price' => 50000,
                'duration' => '6-12 Jam',
                'image' => 'services/helmet-cleaning.jpg',
                'category' => 'Express',
                'status' => 'Tersedia',
            ],
            [
                'name' => 'Bag Cleaning',
                'description' => 'Layanan pembersihan dan perawatan tas serta topi agar tetap bersih dan nyaman digunakan.',
                'price' => 35000,
                'duration' => '2-3 Hari',
                'image' => 'services/bag-cleaning.jpg',
                'category' => 'Cleaning',
                'status' => 'Tersedia',
            ],
        ]);
    }
}