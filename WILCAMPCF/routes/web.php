<?php

use Illuminate\Routing\Route as RoutingRoute;
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

/*Route::get('/', function () {
    return view('home');
})->name('Home');*/

Route::view('/', 'home')->name('Home');
Route::view('/inicio1', 'inicio1')->name('Ini1');
Route::view('/inicio2', 'inicio2')->name('Ini2');
Route::view('/inicio3', 'inicio3')->name('Ini3');
Route::view('/inicio1.1', 'inicio1.1')->name('Ini1.1');
Route::view('/inicio1.2', 'inicio1.2')->name('Ini1.2');
Route::view('/inicio1.3', 'inicio1.3')->name('Ini1.3');


