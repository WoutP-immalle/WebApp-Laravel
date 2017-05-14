<?php

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
        DB::table('currencies')->insert([
            'valuta' => "€",
            'naam' => "euro",
            'afkorting' => "EUR",
            'bedrag' => 1,
            'tussenbedrag' => 1,
        ]);
        
        DB::table('currencies')->insert([
            'valuta' => "$",
            'naam' => "dollar",
            'afkorting' => "USD",
            'bedrag' => 1.09335,
            'tussenbedrag' => 0.914620204,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "£",
            'naam' => "pond",
            'afkorting' => "GBP",
            'bedrag' => 0.84828148,
            'tussenbedrag' => 1.17885398,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "₹",
            'naam' => "indian rupees",
            'afkorting' => "INR",
            'bedrag' => 70.167501,
            'tussenbedrag' => 0.014251612,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "¥",
            'naam' => "japanese yen",
            'afkorting' => "JPY",
            'bedrag' => 123.962585,
            'tussenbedrag' => 0.0080669502,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "$",
            'naam' => "australian dollar",
            'afkorting' => "AUD",
            'bedrag' => 1.48090207,
            'tussenbedrag' => 0.675264097,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "CHF",
            'naam' => "swiss franc",
            'afkorting' => "CHF",
            'bedrag' => 1.09444335,
            'tussenbedrag' => 0.913706498,
        ]);
        
        DB::table('currencies')->insert([
            'valuta' => "$",
            'naam' => "canadian dollar",
            'afkorting' => "CAD",
            'bedrag' => 1.49886,
            'tussenbedrag' => 0.66717,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "¥",
            'naam' => "chinese yuan",
            'afkorting' => "CNY",
            'bedrag' => 7.54424702,
            'tussenbedrag' => 0.132551333,
        ]);
    }
}
