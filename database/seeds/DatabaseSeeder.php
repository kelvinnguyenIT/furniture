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
            UserSeeder::class,
            ConfigurationSeeder::class,
            CategorySeeder::class,
            GroupSeeder::class,
            PostSeeder::class,
            ProductSeeder::class,
            ProductGroupSeeder::class,
            BrandSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
        ]);
    }
}
