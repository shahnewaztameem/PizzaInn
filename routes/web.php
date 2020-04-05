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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create', 'PizzaController@create');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::delete('/pizzas/{id}', 'PizzaController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
