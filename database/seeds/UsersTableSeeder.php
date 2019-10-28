<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'phone_call' => '08999111697',
            'address' => $faker->address,
            'user_image' => 'Mask Group 1.png',
            'instagram' => $faker->username,
            'password' => Hash::make('1234567')
        ]);

        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'phone_call' => '08999000697',
            'address' => $faker->address,
            'user_image' => 'Mask Group 1.png',
            'instagram' => $faker->username,
            'password' => Hash::make('1234567')
        ]); 
    }
}
