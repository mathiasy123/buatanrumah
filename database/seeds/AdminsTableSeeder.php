<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

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
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin.cms711@buatanrumah.id',
            'password' => Hash::make('admin567@!')
        ]);
        
    }
}
