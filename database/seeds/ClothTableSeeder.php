<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClothTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        
            DB::table('cloths')->insert([
                [
                    'user_id' => 1,
                    'category_name' => 'シャツ',
                    'brand_name' => 'オーラリー',
                    'memo' => '15000円',
                    'cloth_filename' =>'fmAshaOpcOTQONIu9umujzxYUeUyFT06N8Eu1Tfd.jpeg'
                ],
                [
                    'user_id' => 2,
                    'category_name' => 'シャツ',
                    'brand_name' => 'オーラリー',
                    'memo' => '15000円',
                    'cloth_filename' =>'fmAshaOpcOTQONIu9umujzxYUeUyFT06N8Eu1Tfd.jpeg'
                ],
                [
                    'user_id' => 3,
                    'category_name' => 'シャツ',
                    'brand_name' => 'オーラリー',
                    'memo' => '15000円',
                    'cloth_filename' =>'fmAshaOpcOTQONIu9umujzxYUeUyFT06N8Eu1Tfd.jpeg'
                ],
                
            ]);
    }
}