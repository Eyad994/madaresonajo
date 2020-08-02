<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/{locale?}", "HomeController@index")->name('home')->where('locale', 'ar|en');

Route::get('refreshCarousel', 'HomeController@refreshCarousel');

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'], function () {

    Route::get('/', 'HomeController@index')->where('locale', 'ar|en');

    Route::get('/getRegions/{id}', 'HomeController@getRegions');

    /***************************Supplier**************************************/
    Route::prefix('supplier')->group(function (){
       Route::get('index', 'SupplierController@index')->name('mainSupplier');
    });
    /*****************************************************************/
    Route::post('search', 'HomeController@search')->name('search');
    Route::get('institutions/{id}', 'HomeController@educationalInstitutions')->name('institutions');
    Route::get('news', 'SchoolController@news')->name('news');
    Route::get('newSubscription', 'SchoolController@newSubscription')->name('newSubscription');
    Route::post('newSubscription', 'SchoolController@storeNewSubscription')->name('newSubscription');
    Route::get('newSuggestion', 'SchoolController@newSuggestion')->name('newSuggestion');
    Route::post('newSuggestion', 'SchoolController@storeNewSuggestion')->name('newSuggestion');

    Route::get('faq', 'FaqController@index')->name('faq');
    Route::get('discounts', 'DiscountController@index')->name('discounts');
    Route::post('discounts', 'DiscountController@store')->name('storeDiscount');
    /******************************************************/
    Route::prefix('school')->group(function () {
        Route::get('{slug}', 'SchoolController@show');
    });

    Route::get('pricing', 'PricingController@index')->name('pricing');
    Route::get('contactUs', 'PricingController@contactUs')->name('contactUs');

    Route::get('{slug}', 'SchoolController@showWithoutModal');
    Route::get('showMore/{id}/{title}', 'SchoolController@showMore');


});