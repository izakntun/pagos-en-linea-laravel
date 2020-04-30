<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'usd',
            'eur',
            'mxn'
        ];

        foreach ($currencies as $currency) {
            Currency::create([
                'iso' => $currency
            ]);
        }
    }
}
