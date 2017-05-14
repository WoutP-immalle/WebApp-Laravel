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
    $bedragAUD = DB::table('currencies')->where('naam', 'australian dollar')->get();
    $bedragCHF = DB::table('currencies')->where('naam', 'swiss franc')->get();

    if($beginCurrency == $bedragEuro[0]->afkorting)
    {
        $tussenBerekening = $value;
    } else if($beginCurrency == $bedragDollar[0]->afkorting)
    {
        $tussenBerekening = $value * $bedragDollar[0]->tussenbedrag;
    } else if($beginCurrency == $bedragPond[0]->afkorting) 
    {
        $tussenBerekening = $value * $bedragPond[0]->tussenbedrag;
    } else if($beginCurrency == $bedragINR[0]->afkorting)
    {
        $tussenBerekening = $value * $bedragINR[0]->tussenbedrag;
    } else if($beginCurrency == $bedragJPY[0]->afkorting)
    {
        $tussenBerekening = $value * $bedragJPY[0]->tussenbedrag;
    } else if($beginCurrency == $bedragAUD[0]->afkorting)
    {
        $tussenBerekening = $value * $bedragAUD[0]->tussenbedrag;
    } else if($beginCurrency == $bedragCHF[0]->afkorting)
    {
        $tussenBerekening = $value * $bedragCHF[0]->tussenbedrag;
    };



    if($beginCurrency == $eindCurrency)
    {
        $outputs = $value;
    }

    else if($eindCurrency == $bedragEuro[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragEuro[0]->bedrag . " " . $bedragEuro[0]->naam;
    } else if($eindCurrency == $bedragDollar[0]->afkorting) 
    {
        $outputs = $tussenBerekening * $bedragDollar[0]->bedrag . " " . $bedragDollar[0]->naam;
    } else if($eindCurrency == $bedragPond[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragPond[0]->bedrag . " " . $bedragPond[0]->naam;
    } else if($eindCurrency == $bedragINR[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragINR[0]->bedrag . " " . $bedragINR[0]->naam;
    } else if($eindCurrency == $bedragJPY[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragJPY[0]->bedrag . " " . $bedragJPY[0]->naam;
    } else if($eindCurrency == $bedragAUD[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragAUD[0]->bedrag . " " . $bedragAUD[0]->naam;
    } else if($eindCurrency == $bedragCHF[0]->afkorting)
    {
        $outputs = $tussenBerekening * $bedragCHF[0]->bedrag . " " . $bedragCHF[0]->naam;
    };

    
     

    return [
        //'blab' => Request::input('input'),
        //'bla' => Request::input('dropdown'),
        //Request::input('input')
        $outputs
    ];
});
