<?php

use App\Models\PostTag;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->isLocal()) {
            factory(PostTag::class, 30)
                ->create();
        }
    }
}
