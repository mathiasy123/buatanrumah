<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Order;


class OrdersTableSeeder extends Seeder
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

            Order::create([
                'user_id' => 1,
                'food_id' => 3,
                'order_code' => strtolower(Str::random(9)),
                'customer_name' => $faker->name,
                'customer_phone' => '08999000697',
                'customer_address' => $faker->address,
                'quantity' => $faker->numberBetween(10, 20),
                'total_price' => $faker->numberBetween(50000, 120000),
                'finished' => $faker->numberBetween(0, 1)
            ]);

        }
    }
}
