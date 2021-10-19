<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CategoryArr = ['Eğlence', 'Lorem Possum', 'Dolor Sit Amet', 'Addis pic veldt'];
        foreach ($CategoryArr as $item) {
            DB::table('categories')->insert([

                'name' => $item,
                'slug' => Str::slug($item)

            ]);
        }
    }
}
