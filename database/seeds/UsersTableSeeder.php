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

        for($count = 1; $count <= 20; $count++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_call' => '08999111697',
                'address' => $faker->address,
                'user_image' => 'Mask Group 1.png',
                'instagram' => $faker->username,
                'password' => Hash::make('1234567')
            ]);
        }
    }
}
