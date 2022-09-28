<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name'=>'漫才'
        ]);
        DB::table('genres')->insert([
            'name'=>'コント'
        ]);
        DB::table('genres')->insert([
            'name'=>'ピン'
        ]);
        
    }
}
