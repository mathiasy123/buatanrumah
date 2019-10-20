<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        foreach(range(0, 19) as $iteration) {

            Food::create([
                'user_id' => 1,
                'food_name' => $faker->word,
                'rating' => $faker->numberBetween(1, 10),
                'description' => $faker->text($maxNbChars = 50),
                'image' => 'Mask Group 1.png',
                'price' => 20000
            ]);
        }
    }
}
