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
    $beginCurrency = Request::input('beginCurrencyDropdown');
    $eindCurrency = Request::input('eindCurrencyDropdown');

    $bedragEuro = DB::table('currencies')->where('naam', 'euro')->get();
    $bedragDollar = DB::table('currencies')->where('naam', 'dollar')->get();
    $bedragPond = DB::table('currencies')->where('naam', 'pond')->get();
    $bedragINR = DB::table('currencies')->where('naam', 'indian rupees')->get();
    $bedragJPY = DB::table('currencies')->where('naam', 'japanese yen')->get();

    if($beginCurrency == 'EUR')
    {
        $tussenBerekening = $value;
    } else if($beginCurrency == 'USD')
    {
        $tussenBerekening = $value * $bedragDollar[0]->tussenbedrag;
    } else if($beginCurrency == 'GBP') 
    {
        $tussenBerekening = $value * $bedragPond[0]->tussenbedrag;
    } else if($beginCurrency == 'INR')
    {
        $tussenBerekening = $value * $bedragINR[0]->tussenbedrag;
    } else if($beginCurrency == 'JPY')
    {
        $tussenBerekening = $value * $bedragJPY[0]->tussenbedrag;
    };



    if($beginCurrency == $eindCurrency)
    {
        $outputs = $value;
    }

    else if($eindCurrency == 'EUR')
    {
        $outputs = $tussenBerekening * $bedragEuro[0]->bedrag . " " . $bedragEuro[0]->naam;
    } else if($eindCurrency == 'USD') 
    {
        $outputs = $tussenBerekening * $bedragDollar[0]->bedrag . " " . $bedragDollar[0]->naam;
    } else if($eindCurrency == 'GBP')
    {
        $outputs = $tussenBerekening * $bedragPond[0]->bedrag . " " . $bedragPond[0]->naam;
    } else if($eindCurrency == 'INR')
    {
        $outputs = $tussenBerekening * $bedragINR[0]->bedrag . " " . $bedragINR[0]->naam;
    } else if($eindCurrency == 'JPY')
    {
        $outputs = $tussenBerekening * $bedragJPY[0]->bedrag . " " . $bedragJPY[0]->naam;
    };

    
     

    return [
        //'blab' => Request::input('input'),
        //'bla' => Request::input('dropdown'),
        //Request::input('input')
        $outputs
    ];
});
