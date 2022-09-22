<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('offices')->insert([
            'name'=>'吉本興業',
            'anker'=>'https://ja.wikipedia.org/wiki/%E5%90%89%E6%9C%AC%E8%88%88%E6%A5%AD'
        ]);
        //2
        DB::table('offices')->insert([
            'name'=>'松竹芸能',
            'anker'=>NULL
        ]);
        //3
        DB::table('offices')->insert([
            'name'=>'マセキ芸能社',
            'anker'=>NULL
        ]);
        //4
        DB::table('offices')->insert([
            'name'=>'太田プロダクション',
            'anker'=>NULL
        ]);
        //5
        DB::table('offices')->insert([
            'name'=>'ワタナベエンターテインメント',
            'anker'=>NULL
        ]);
        //6
        DB::table('offices')->insert([
            'name'=>'浅井企画',
            'anker'=>NULL
        ]);
        //7
        DB::table('offices')->insert([
            'name'=>'プロダクション人力舎',
            'anker'=>NULL
        ]);
        //8
        DB::table('offices')->insert([
            'name'=>'ホリプロコム',
            'anker'=>NULL
        ]);
        //9
        DB::table('offices')->insert([
            'name'=>'タイタン',
            'anker'=>NULL
        ]);
        //10
        DB::table('offices')->insert([
            'name'=>'サンミュージック',
            'anker'=>NULL
        ]);
        //11
        DB::table('offices')->insert([
            'name'=>'ケイダッシュステージ',
            'anker'=>NULL
        ]);
        //12
        DB::table('offices')->insert([
            'name'=>'ソニー・ミュージックアーツ',
            'anker'=>NULL
        ]);
        //13
        DB::table('offices')->insert([
            'name'=>'グレープカンパニー',
            'anker'=>NULL
        ]);
    }
}
