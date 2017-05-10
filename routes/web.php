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

    //$currencies = DB::table('Currencies')->get();

    $bedragEuro = DB::table('currencies')->where('naam', 'euro')->get();

    $bedragDollar = DB::table('currencies')->where('naam', 'dollar')->get();

    return view('welcome', compact('bedragEuro', 'bedragDollar'));
    
});
