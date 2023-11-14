<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => '北海道'
            ]);
            
        DB::table('regions')->insert([
            'name' => '北陸'
            ]);
        
        DB::table('regions')->insert([
            'name' => '関東'
            ]);
            
        DB::table('regions')->insert([
            'name' => '中部'
            ]);
        
        DB::table('regions')->insert([
            'name' => '関西'
            ]);
            
        DB::table('regions')->insert([
            'name' => '四国'
            ]);
        
        DB::table('regions')->insert([
            'name' => '九州'
            ]);
    }
}
