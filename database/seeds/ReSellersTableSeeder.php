<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

use App\ReSeller;

class ReSellersTableSeeder extends Seeder
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
            ReSeller::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_call' => '08999111697',
                'address' => $faker->address,
                'reseller_image' => 'Mask Group 1.png',
                'password' => Hash::make('1234567')
            ]);
        }
    }
}
