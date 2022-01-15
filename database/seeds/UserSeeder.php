<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Shop Admin',
            'email' => 'Admin123@gmail.com',
            'password' => bcrypt('Admin@123')
        ]);
    }
}
