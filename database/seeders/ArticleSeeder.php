<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {

        for ($i = 0; $i < 4; $i++) {
            $faker = Faker::create();
            $title = $faker->sentence(3);
            DB::table('articles')->insert([
                'category_id' => random_int(1, 4),
                'title' => $title,
                'content' => $faker->text,
                'image' => $faker->imageUrl,
                'slug' => Str::slug($title),
                'created_at' => $faker->datetime(),
                'updated_at' => now()

            ]);
        }
    }
}
