<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title'=>'最高',
            'neta_id'=>1,
            'body'=>'良かった',
            'user_id'=>1,
            'votes'=>4,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最低',
            'neta_id'=>2,
            'body'=>'良くない',
            'user_id'=>1,
            'votes'=>1,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高２',
            'neta_id'=>3,
            'body'=>'良かった２',
            'user_id'=>1,
            'votes'=>3,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高3',
            'neta_id'=>4,
            'body'=>'良かった',
            'user_id'=>1,
            'votes'=>3,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最低22',
            'neta_id'=>5,
            'body'=>'良くない',
            'user_id'=>1,
            'votes'=>1,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高24',
            'neta_id'=>6,
            'body'=>'良かった２',
            'user_id'=>1,
            'votes'=>5,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高27',
            'neta_id'=>7,
            'body'=>'良かった２',
            'user_id'=>1,
            'votes'=>2,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高32',
            'neta_id'=>8,
            'body'=>'良かった',
            'user_id'=>1,
            'votes'=>4,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最低68',
            'neta_id'=>9,
            'body'=>'良くない',
            'user_id'=>1,
            'votes'=>2,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviews')->insert([
            'title'=>'最高99',
            'neta_id'=>6,
            'body'=>'良かった２',
            'user_id'=>1,
            'votes'=>3,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
    }
}
