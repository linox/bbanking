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
    return 'BBanking';
});

Auth::routes();




Route::group(['prefix' => 'ib', 'as' => 'ib.'], function () {


    Route::group(['middleware' => ['auth']], function () {
        Route::get('/setting/profile', 'UserController@profile')->name('setting.profile');

    });

    Route::get('/home', 'HomeController@index')->name('home');

    //Investiment
    Route::get('/investiment/investiments', 'InvestimentController@index')->name('investiment.investiments');
    Route::get('/investiment/new-investiment', 'InvestimentController@create')->name('investiment.new-investiment');
    Route::post('/investiment/store-investiment', 'InvestimentController@store_investiment')->name('investiment.store-investiment');

    //Investiment
    Route::get('/setting/profile', 'UserController@profile')->name('setting.profile');
    Route::get('/setting/access', 'UserController@access')->name('setting.access');
    Route::get('/setting/bank', 'UserController@bank')->name('setting.bank');

    //Digital Account
    Route::get('/digital-account/extract', 'DigitalAccountController@extract')->name('digital-account.extract');
    Route::get('/digital-account/payment', 'DigitalAccountController@payment')->name('digital-account.payment');
    Route::get('/digital-account/transfer', 'DigitalAccountController@transfer')->name('digital-account.transfer');
    Route::get('/digital-account/mobile-recharge', 'DigitalAccountController@mobile_recharge')->name('digital-account.mobile-recharge');
    Route::get('/digital-account/deposit', 'DigitalAccountController@deposit')->name('digital-account.deposit');

    //Indicateds
    Route::get('/indicated/indicateds', 'UserController@indicateds')->name('indicated.indicateds');
    Route::get('/indicated/link_indicated', 'UserController@access')->name('indicated.link_indicated');
    Route::post('/indicated/indicateds/store', 'UserController@indicated_store')->name('indicated.indicateds.store');

});




