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

Route::get('/about', function () {
    $urlRelatif = Route::getCurrentRoute()->uri();
    return view('pages.about', compact('urlRelatif'));
});

Route::get('/services', function () {
    // dd()
    $urlRelatif = Route::getCurrentRoute()->uri();
    return view('pages.services', compact('urlRelatif'));
});