<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => '野菜・サラダ'],
                ['name' => '肉'],
                ['name' => '魚'],
                ['name' => 'きのこ'],
                ['name' => '丼・ご飯物'],
                ['name' => 'たまご'],
                ['name' => '麺類'],
                ['name' => 'スープ・汁物'],
                ['name' => '鍋'],
                ['name' => '粉もの'],
                ['name' => 'おつまみ'],
                ['name' => '創作'],
            ]);
        }

    }
}
