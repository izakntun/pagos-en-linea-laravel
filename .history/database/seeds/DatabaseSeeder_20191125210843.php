<?php

use CurrenciesTableSeeder as CurrencySeeder;
use Illuminate\Database\Seeder;
use PaymentPlatformTableSeeder as PaymentPlatformSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentPlatformSeeder::class);
        $this->call(CurrencySeeder::class);
    }
}
