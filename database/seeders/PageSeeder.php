<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 0;
        $pages = ['Hakkımızda','Vizyonumuz','Misyonumuz'];
        foreach ($pages as $page) {
            $count++;
            $faker = Faker::create();
            DB::table('pages')->insert([
                'title' => $page,
                'content' => $faker->paragraph(6),
                'image' => $faker->imageUrl,
                'slug' => str_slug($page),
                'order' =>$count,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}
