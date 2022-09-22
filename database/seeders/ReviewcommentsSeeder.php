<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class ReviewcommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviewcomments')->insert([
            'review_id'=>1,
            'user_id'=>1,
            'body'=>'納得',
            'votes'=>5,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
        DB::table('reviewcomments')->insert([
            'review_id'=>2,
            'user_id'=>1,
            'body'=>'納得できない',
            'votes'=>1,
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime()
        ]);
    }
}
