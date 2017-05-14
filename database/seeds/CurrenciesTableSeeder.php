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
        
    }
}
