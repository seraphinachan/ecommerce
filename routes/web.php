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

/* Route Grouping */

Route::group(['prefix' => 'user'], function() {
    Route::get('/', function() {
        return "<h1>Customer List</h1>";
    });

    Route::get('/create', function() {
        return "<h1>Customer Create</h1>";
    });

    Route::get('/show', function() {
        return "<h1>Customer Show</h1>";
    });
});
