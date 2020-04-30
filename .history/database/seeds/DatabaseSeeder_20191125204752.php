<?php

use CurrenciesTableSeeder;
use Illuminate\Database\Seeder;
use PaymentPlatformTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentPlatformTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
    }
}
