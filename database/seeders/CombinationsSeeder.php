<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CombinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('combinations')->insert([
            'name'=>'銀シャリ',
            'member1'=>'鰻和 弘',
            'member2'=>'橋本 直',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/%E9%8A%80%E3%82%B7%E3%83%A3%E3%83%AA_(%E3%81%8A%E7%AC%91%E3%81%84%E3%82%B3%E3%83%B3%E3%83%93)',
        ]);
        DB::table('combinations')->insert([
            'name'=>'サンドウィッチマン',
            'member1'=>'伊達 みきお',
            'member2'=>'富澤 たけし',
            'office_id'=>13,
            'anker'=>'https://ja.wikipedia.org/wiki/%E3%82%B5%E3%83%B3%E3%83%89%E3%82%A6%E3%82%A3%E3%83%83%E3%83%81%E3%83%9E%E3%83%B3_(%E3%81%8A%E7%AC%91%E3%81%84%E3%82%B3%E3%83%B3%E3%83%93)',
        ]);
        DB::table('combinations')->insert([
            'name'=>'和牛',
            'member1'=>'水田 信二',
            'member2'=>'川西 賢志郎',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/%E5%92%8C%E7%89%9B_(%E3%81%8A%E7%AC%91%E3%81%84%E3%82%B3%E3%83%B3%E3%83%93)',
        ]);
        DB::table('combinations')->insert([
            'name'=>'ノンスタイル',
            'member1'=>'石田 明',
            'member2'=>'井上 裕介',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/NON_STYLE',
        ]);
        DB::table('combinations')->insert([
            'name'=>'ダウンタウン',
            'member1'=>'浜田 雅功',
            'member2'=>'松本 人志',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/NON_STYLE',
        ]);
        DB::table('combinations')->insert([
            'name'=>'マヂカルラブリー',
            'member1'=>'野田クリスタル',
            'member2'=>'村上',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/%E3%83%9E%E3%83%82%E3%82%AB%E3%83%AB%E3%83%A9%E3%83%96%E3%83%AA%E3%83%BC',
        ]);
        DB::table('combinations')->insert([
            'name'=>'霜降り明星',
            'member1'=>'せいや',
            'member2'=>'粗品',
            'feature'=>'第７世代',
            'office_id'=>1,
            'anker'=>'https://ja.wikipedia.org/wiki/%E9%9C%9C%E9%99%8D%E3%82%8A%E6%98%8E%E6%98%9F',
        ]);
        DB::table('combinations')->insert([
            'name'=>'ハナコ',
            'member1'=>'菊田 竜大',
            'member2'=>'秋山 寛貴',
            'member3'=>'岡部 大',
            'feature'=>'第７世代',
            'office_id'=>5,
            'anker'=>'https://ja.wikipedia.org/wiki/%E9%9C%9C%E9%99%8D%E3%82%8A%E6%98%8E%E6%98%9F',
        ]);
        DB::table('combinations')->insert([
            'name'=>'アンジャッシュ',
            'member1'=>'児島 一哉',
            'member2'=>'渡部 建',
            'office_id'=>7,
            'anker'=>'https://ja.wikipedia.org/wiki/%E9%9C%9C%E9%99%8D%E3%82%8A%E6%98%8E%E6%98%9F',
        ]);
        DB::table('combinations')->insert([
            'name'=>'バカリズム',
            'member1'=>'升野 英知',
            'office_id'=>3,
            'anker'=>'https://ja.wikipedia.org/wiki/%E3%83%90%E3%82%AB%E3%83%AA%E3%82%BA%E3%83%A0'
        ]);
        
    }
}
