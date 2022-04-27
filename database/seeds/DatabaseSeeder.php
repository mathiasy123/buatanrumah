<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminsTableSeeder::class,
            FoodsTableSeeder::class,
            OrdersTableSeeder::class,
            ProfilesTableSeeder::class,
            ReSellersTableSeeder::class,
            UsersTableSeeder::class,
            VendorContentsTableSeeder::class
        ]);
    }
}
