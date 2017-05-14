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


    $value = Request::input('valutaInput');
    $beginCurrency = Request::input('beginCurrencyDropdown');
    $eindCurrency = Request::input('eindCurrencyDropdown');

    $beginBedrag = DB::table('currencies')->where('afkorting', $beginCurrency)->get();
    $eindBedrag = DB::table('currencies')->where('afkorting', $eindCurrency)->get();


    if($beginCurrency == $beginBedrag[0]->afkorting)
    {
        $tussenBerekening = $value * $beginBedrag[0]->tussenbedrag;
    };


    if($beginCurrency == $eindCurrency)
    {
        $outputs = $value . " " . $eindBedrag[0]->naam;
    } else if($eindCurrency == $eindBedrag[0]->afkorting)
    {
        $outputs = $tussenBerekening * $eindBedrag[0]->bedrag . " " . $eindBedrag[0]->naam;
    };    
     

    return [

        $outputs
    ];
});
