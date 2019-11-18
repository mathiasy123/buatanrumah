<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Admin::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('doraxmachadmin123')
        ]);
        
    }
}
