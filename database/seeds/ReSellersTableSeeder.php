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
        $images = [
            'Karna Kurniawan Muhammad.jpg',
            'Kurniawan Muhammad Ali.jpg',
            'Mathias Yeremia Aryadi.jpg',
            'Vanya Fujiati M.Farm.jpg'
        ];

        for($count = 1; $count <= 20; $count++) {
            $choosen_image = array_rand($images, 1);

            ReSeller::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_call' => '08999111697',
                'address' => $faker->address,
                'reseller_image' => $images[$choosen_image],
                'password' => Hash::make('1234567')
            ]);
        }
    }
}
