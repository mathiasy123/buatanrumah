<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Profile::create([
            'user_id' => $faker->numberBetween(1, 20),
            'hero_image' => 'gambar-hero.jpg',
            'title_hero' => $faker->name,
            'subtitle_hero' => 'Pemasak Chinnese Food',
            'cathering_name' => 'Chinnese Food 81',
            'title_about' => 'Tentang ' . $faker->name,
            'text_about' => 'fjwjfwdfwfnhkjfnbsdkjfnkjsdnbkjsdnfbjfhndfjkwnbjknjwfnfnwfnnjnwknfjnjfnwfnkfnfnjnkjnfwjfnwjfnwjfnwjkfnwfnwkfnwfknwkjfnwkjfnwknfwjknfkfnwjkfnwjdkfnwjkfnwkfnwkfnjkfn',
            'about_image' => 'gambar-about.jpg'
        ]);
    }
}
