<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            OfficesSeeder::class,
            GenresSeeder::class,
            CombinationsSeeder::class,
            NetasSeeder::class,
            UsersSeeder::class,
            ReviewsSeeder::class,
            ReviewcommentsSeeder::class,
            ProvidersSeeder::class,
            ]);
    }
}
