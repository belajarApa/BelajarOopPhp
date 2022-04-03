<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user1;
use App\Models\category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user1::factory(3)->create();
        post::factory(18)->create();

        category::create([
            'name' => 'Busines',
            'slug' => 'category1'
        ]);
        category::create([
            'name' => 'Technology',
            'slug' => 'category2'
        ]);
        category::create([
            'name' => 'Lifestyle',
            'slug' => 'category3'
        ]);


    }
}