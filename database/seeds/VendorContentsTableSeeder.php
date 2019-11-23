<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

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
        $faker = Faker::create('id_ID');

        VendorContent::create([
            'hero_image' => 'Mask Group 1.png',
            'title_hero' => 'Buatan Rumah',
            'text_hero' => 'fjwjfwdfwfnhkjfnbsdkjfnkjsdnbkjsdnfbjfhndfjkwnbjknjwfnfnwfnnjnwknfjnjfnwfnkfnfnjnkjnfwjfnwjfnwjfnwjkfnwfnwkfnwfknwkjfnwkjfnwknfwjknfkfnwjkfnwjdkfnwjkfnwkfnwkfnjkfn',
            'title_about' => 'Tentang Kita',
            'text_about' => 'fjwjfwdfwfnhkjfnbsdkjfnkjsdnbkjsdnfbjfhndfjkwnbjknjwfnfnwfnnjnwknfjnjfnwfnkfnfnjnkjnfwjfnwjfnwjfnwjkfnwfnwkfnwfknwkjfnwkjfnwknfwjknfkfnwjkfnwjdkfnwjkfnwkfnwkfnjkfn',
            'video' => 'https://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0'
        ]);

    }
}
