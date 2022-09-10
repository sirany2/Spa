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
Route::get('/nav', function () {
    $titre= "nav";
    return view('nav', compact('titre'));
});
Route::get('/prix', function () {
    $titre= "prix";
    return view('prix', compact('titre'));
});
Route::get('/contact', function () {
    $titre= "contact";
    return view('contact', compact('titre'));
});
Route::get('/template', function () {
    $titre= "template";
    return view('template', compact('titre'));
});
