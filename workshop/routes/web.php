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

Route::get('/', 'HomepageController@index');


Route::get('/poke', 'pokeApi@pokemon');
Route::get('/catch', 'CatchController@index')->name('catch');
Route::get('/inventory', 'InventoryController@index')->name('inventory');
Route::post('/catchOrNot', 'CatchOrNotController@index')->name('catchOrNot');
Route::get('/store', 'StoreController@display')->name('store');
Route::post('/buy', 'StoreController@index')->name('buy');
Route::post('/sell', 'StoreController@sell')->name('sell');
Route::post('/level', 'StoreController@levelup')->name('level');
Route::post('/shiny', 'StoreController@shiny')->name('shiny');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
