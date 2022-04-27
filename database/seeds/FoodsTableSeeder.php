<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($count = 1; $count <= 20; $count++) {

            Food::create([
                'user_id' => 1,
                'food_name' => 'Sop Buntut',
                'rating' => $faker->numberBetween(1, 10),
                'description' => $faker->text($maxNbChars = 50),
                'image' => 'Makanan.png',
                'price' => 20000
            ]);

        }
    }
}
