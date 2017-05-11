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
        ]);
        
        DB::table('currencies')->insert([
            'valuta' => "$",
            'naam' => "dollar",
            'afkorting' => "USD",
            'bedrag' => 1.087695,
        ]);

        DB::table('currencies')->insert([
            'valuta' => "£",
            'naam' => "pond",
            'afkorting' => "GBP",
            'bedrag' => 0.843871013,
        ]);
        
    }
}
