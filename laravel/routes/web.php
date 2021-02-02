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

Route::get('/drinks', 'DrinkController@index')
    -> name('drinks-index');
Route::get('/drink/{id}', 'DrinkController@show')
    -> name('drink-show');
Route::get('/new/drink', 'DrinkController@create')
        -> name('drink-create');
Route::post('/new/drink/store', 'DrinkController@store')
        -> name('drink-store');

Route::get('/edit/{id}' , 'DrinkController@edit')
            -> name('edit-drink');
Route::post('/update/{id}' , 'DrinkController@update')
            -> name('update-drink');
Route::get('/delete/{id}' , 'DrinkController@delete')
            -> name('delete-drink');
