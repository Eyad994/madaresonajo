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

    Route::post('search', 'HomeController@search')->name('search');

    /******************************************************/
    Route::prefix('school')->group(function () {
        Route::get('{slug}', 'SchoolController@show');
    });

    Route::get('{slug}', 'SchoolController@showWithoutModal');
    Route::get('showMore/{id}', 'SchoolController@showMore');
});