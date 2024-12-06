<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedbacks')->insert([
            [
                'nama' => 'Danu Ardiansyah',
                'komentar' => 'Pelayanan di toko ini benar-benar mengesankan. Staf sangat ramah dan membantu dalam memberikan rekomendasi produk yang sesuai dengan kebutuhan saya. Saya sangat merekomendasikan tempat ini kepada siapa pun yang mencari pelayanan terbaik.',
            ],
            [
                'nama' => 'Hanafi Dana',
                'komentar' => 'Saya sangat menyukai berbagai pilihan warna dan desain yang ditawarkan di toko ini. Kualitas produk yang sangat baik membuat saya merasa puas dengan setiap pembelian yang saya lakukan. Tempat ini pasti menjadi favorit saya untuk belanja.',
            ],
            [
                'nama' => 'Muhammad Iqrom',
                'komentar' => 'Suasana toko yang nyaman dan tenang membuat pengalaman belanja menjadi lebih menyenangkan. Produk yang tersedia sangat beragam, dan harganya juga cukup bersaing. Ini adalah tempat yang sempurna untuk mencari apa yang Anda butuhkan.',
            ],
            [
                'nama' => 'Fitri Amanah',
                'komentar' => 'Pengalaman belanja saya di sini sangat menyenangkan. Staf sangat profesional dalam memberikan layanan, dan produk yang tersedia sangat berkualitas. Saya akan kembali lagi untuk berbelanja di toko ini.',
            ],
            [
                'nama' => 'Siti Aisyah',
                'komentar' => 'Toko ini memiliki koleksi produk yang sangat lengkap, dan layanan pelanggan yang luar biasa. Saya merasa sangat dihargai dan puas dengan setiap pembelian yang saya lakukan. Saya pasti akan merekomendasikan toko ini.',
            ],
            [
                'nama' => 'Rudi Santoso',
                'komentar' => 'Toko ini menawarkan produk berkualitas tinggi dengan harga yang sangat bersaing. Pelayanan yang diberikan sangat cepat dan responsif. Saya merasa sangat puas dan akan terus berbelanja di sini.',
            ],
        ]);


    }
}
