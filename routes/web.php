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
    $titre = "accueil";
    return view('index', compact('titre'));
});
Route::get('/a-propos', function () {
    $titre= "a-propos";
    return view('a-propos', compact('titre'));
});
Route::get('/service', function () {
    $titre= "service";
    return view('service', compact('titre'));
});