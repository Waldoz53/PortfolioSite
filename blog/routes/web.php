<?php

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

Route::get('/mywork', function () {
    return view('mywork');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get("/privacypolicy", function () {
    return view('privacypolicy');
});
