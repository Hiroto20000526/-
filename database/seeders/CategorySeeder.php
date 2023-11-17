<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('categories')->insert([
            'name' => '募集'
            ]);
        
        DB::table('categories')->insert([
            'name' => '参加'
            ]);
            
        DB::table('categories')->insert([
            'name' => 'ブログ'
            ]);
        
    }
}
