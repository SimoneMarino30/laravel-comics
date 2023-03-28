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
    $comics = config('comics_db');
    // dd($comics);
    return view('homepage', compact('comics'));
})->name('homepage');

Route::get('/thumb/{key}', function ($key) {
    $comics = config('comics_db');
    // dd($comics);
    $comic = $comics[$key];
    return view('thumbDetails', compact('comic'));
})->name('details');