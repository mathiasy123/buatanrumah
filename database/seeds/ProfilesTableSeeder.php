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
            'user_id' => 1,
            'hero_image' => 'gambar-hero.jpg',
            'title_hero' => $faker->name,
            'subtitle_hero' => 'Pemasak Chinnese Food',
            'cathering_name' => 'Chinnese Food 81',
            'title_about' => $faker->name,
            'text_about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id congue justo. Suspendisse potenti. Nulla facilisi. Nam tincidunt ex sed dui fermentum, tincidunt auctor eros pharetra. Nullam mattis, magna vitae dictum egestas, ante nisi cursus massa, a sollicitudin elit ante quis est. Nulla facilisi. Phasellus sit amet consectetur velit. Maecenas commodo semper dictum. Quisque feugiat odio ultricies facilisis interdum. Nunc quis suscipit mi, ut aliquam purus. Phasellus elementum rutrum diam in tempus. Integer a fringilla eros, sed maximus sapien. Duis mollis molestie magna. Fusce interdum luctus turpis, sed tempus ex fringilla at. Praesent gravida mauris dui, non dapibus tortor lacinia vitae.',
            'about_image' => 'gambar-tentang.png'
        ]);
    }
}
