<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cloths')->insert([
            [
                'category_name' => 'しゃつ',
                'brand_name' => 'オーラリー',
                'memo' => '15000円'
            ],
            [
                'category_name' => 'しゃつ',
                'brand_name' => 'オーラリー',
                'memo' => '15000円'
            ],
            [
                'category_name' => 'しゃつ',
                'brand_name' => 'オーラリー',
                'memo' => '15000円'
            ],
              
        ]);

    }
}
