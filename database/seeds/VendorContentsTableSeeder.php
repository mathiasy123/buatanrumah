<?php

use Illuminate\Database\Seeder;

use App\VendorContent;

class VendorContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VendorContent::create([
            'hero_image' => 'gambar-hero.jpg',
            'title_hero' => 'Buatan Rumah',
            'subtitle_hero' => 'Membantu Usaha Katering Anda',
            'text_hero' => 'Ayo! bergabung bersama kami, Anda akan mendapatkan POS penjualan pribadi dan profil usaha katering Anda!',
            'title_about' => 'Tentang Kita',
            'text_about' => 'Buatan Rumah adalah jasa penyedia platform usaha katering untuk profil dan POS penjualan mereka. Buatan Rumah memiliki tujuan untuk membantu meningkatkan penjualan dan keuntungan usaha katering yang telah bergabung dalam Buatan Rumah.',
            'video' => 'video-kami.mp4'
        ]);

    }
}
