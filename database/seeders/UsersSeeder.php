<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Datetime;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'まえた',
            'email'=>'maeryo727@gmail.com',
            'password'=>Hash::make('Ryota0727'),
            'age'=>'20',
            'sex'=>'男',
            'combination_id'=>1,
            'twitter'=>'https://twitter.com/qmggjiggrk1mw7e',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
        ]);
    }
}
