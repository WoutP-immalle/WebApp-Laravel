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

    $value = Request::input('valutaInput');
    $currency = Request::input('currencyDropdown');

    $bedragEuro = DB::table('currencies')->where('naam', 'euro')->get();
    $bedragDollar = DB::table('currencies')->where('naam', 'dollar')->get();
    $bedragPond = DB::table('currencies')->where('naam', 'pond')->get();

    if($currency == 'USD')
    {
        $outputs = $value * $bedragDollar[0]->bedrag;
    } else if($currency == 'EUR') 
    {
        $outputs = $value * $bedragEuro[0]->bedrag;
    } else if($currency == 'GBP')
    {
        $outputs = $value * $bedragPond[0]->bedrag;
    }

    
     

    return [
        //'blab' => Request::input('input'),
        //'bla' => Request::input('dropdown'),
        //Request::input('input')
        $outputs
    ];
});
