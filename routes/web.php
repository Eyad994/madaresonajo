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
/*************************************************************************************/
Route::get('{locale?}/school-data/{id?}/{slug?}', 'SchoolController@showWithoutModalOut')->name('school-data1');
Route::get('school-data/{id?}/{slug?}', 'SchoolController@showWithoutModalOutTwo')->name('school-data2');

/*************************************************************************************/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'], function () {

    Route::post('subscribe', 'EmailSubscriptionController@subscribe')->name('subscribe');
    Route::get('/', 'HomeController@index')->where('locale', 'ar|en');

    Route::get('/getRegions/{id?}', 'HomeController@getRegions')->name('getRegions');
    Route::get('message', 'HomeController@message')->name('message');
    Route::get('objective', 'HomeController@objective')->name('objective');
    Route::get('terms-conditions', 'HomeController@termsConditions')->name('termsConditions');
    Route::get('vision', 'HomeController@vision')->name('vision');

    /***************************Supplier**************************************/
    Route::prefix('supplier')->group(function (){
       Route::get('index', 'SupplierController@index')->name('mainSupplier');
       Route::get('/data/{id?}/{slug?}', 'SupplierController@show')->name('showSupplier');
       Route::post('store/supplier', 'SupplierController@store')->name('storeSupplier');
    });
    /*****************************************************************/
    Route::post('search', 'HomeController@search')->name('search');
    Route::get('sub_search/{text?}', 'HomeController@subSearch')->name('sub_search');
    Route::get('news_search/{text?}', 'NewsController@newsSearch')->name('newsSearch');
    Route::get('supplier_search/{text?}', 'SupplierController@search')->name('supplierSearch');
    Route::get('getSupplierType/{id?}', 'SupplierController@supplierType')->name('supplierType');
    Route::get('institutions/{id?}', 'HomeController@educationalInstitutions')->name('institutions');
    Route::get('news', 'SchoolController@news')->name('news');
    Route::get('newSubscription', 'SchoolController@newSubscription')->name('newSubscription');
    Route::post('newSubscription', 'SchoolController@storeNewSubscription')->name('newSubscription');
    Route::get('newSuggestion', 'SchoolController@newSuggestion')->name('newSuggestion');
    Route::post('newSuggestion', 'SchoolController@storeNewSuggestion')->name('newSuggestion');
    Route::get('services', 'SchoolController@services')->name('services');
    Route::get('faSubscribing', 'SchoolController@faSubscribing')->name('faSubscribing');
    Route::get('distanceLearning', 'SchoolController@distanceLearning')->name('distanceLearning');

    Route::get('faq', 'FaqController@index')->name('faq');
    Route::get('discounts', 'DiscountController@index')->name('discounts');
    Route::post('discounts', 'DiscountController@store')->name('storeDiscount');
    /******************************************************/
    Route::prefix('school')->group(function () {
        Route::get('{slug?}', 'SchoolController@show')->name('show');
    });

    Route::get('pricing', 'PricingController@index')->name('pricing');
    Route::get('contactUs', 'PricingController@contactUs')->name('contactUs');
    Route::post('store/contactUs', 'PricingController@store')->name('storeContactUs');
    Route::get('{slug?}', 'SchoolController@showWithoutModal')->name('showWithoutModal');
    Route::get('showMore/{id?}/{title?}', 'SchoolController@showMore')->name('showMore');

});
