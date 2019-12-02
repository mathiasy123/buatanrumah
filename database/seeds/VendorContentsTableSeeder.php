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
            'subtitle_hero' => 'Tentang Kita',
            'text_hero' => 'fjwjfwdfwfnhkjfnbsdkjfnkjsdnbkjsdnfbjfhndfjkwnbjknjwfnfnwfnnjnwknfjnjfnwfnkfnfnjnkjnfwjfnwjfnwjfnwjkfnwfnwkfnwfknwkjfnwkjfnwknfwjknfkfnwjkfnwjdkfnwjkfnwkfnwkfnjkfn',
            'title_about' => 'Tentang Kita',
            'text_about' => 'fjwjfwdfwfnhkjfnbsdkjfnkjsdnbkjsdnfbjfhndfjkwnbjknjwfnfnwfnnjnwknfjnjfnwfnkfnfnjnkjnfwjfnwjfnwjfnwjkfnwfnwkfnwfknwkjfnwkjfnwknfwjknfkfnwjkfnwjdkfnwjkfnwkfnwkfnjkfn',
            'video' => 'video-kami.mp4'
        ]);

    }
}
