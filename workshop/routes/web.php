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
Route::get('/catch', 'CatchController@index');
Route::post('/catchOrNot', 'CatchOrNotController@index')->name('catchOrNot');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
