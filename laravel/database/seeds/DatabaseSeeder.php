<?php

use Illuminate\Database\Seeder;
use App\Drink;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DrinkSeeder::class);
    }
}
