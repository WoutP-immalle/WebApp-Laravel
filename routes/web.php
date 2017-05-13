<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
    
});

Route::get('/CurrencyConverter', function(Request $request) {
    //return Request::path();

    $beginCurrency = Request::input('currencyDropdownVan');
    $value = Request::input('valutaInput');
    $eindCurrency = Request::input('currencyDropdownNaar');
    $currency;

    $bedragEuro = DB::table('currencies')->where('naam', 'euro')->get();
    $bedragDollar = DB::table('currencies')->where('naam', 'dollar')->get();
    $bedragPond = DB::table('currencies')->where('naam', 'pond')->get();

    if($beginCurrency == 'EUR')
    {
        $tussenbedrag = $value;
        //$currency = $value * $bedragEuro[0]->bedrag;
    } else 
    {
        $tussenbedrag = $value * $bedragEuro[0]->bedrag;    
    }


if ($beginCurrency == $eindCurrency)
{
    $outputs = $value;
} else 
{
    if($eindCurrency == 'USD')
    {
        $outputs = $tussenbedrag * $bedragDollar[0]->bedrag;
    } else if($eindCurrency == 'EUR') 
    {
        $outputs = $tussenbedrag * $bedragEuro[0]->bedrag;
    } else if($eindCurrency == 'GBP')
    {
        $outputs = $tussenbedrag * $bedragPond[0]->bedrag;
    }
}
    
     

    return [
        //'blab' => Request::input('input'),
        //'bla' => Request::input('dropdown'),
        //Request::input('input')
        $outputs
    ];
});hoo
