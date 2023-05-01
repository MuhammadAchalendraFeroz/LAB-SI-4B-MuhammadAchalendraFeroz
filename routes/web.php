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
Route::get('/portfolio1', function () {
    return view('portfolio1');
});
Route::get('/portfolio2', function () {
    return view('portfolio2');
});
Route::get('/portfolio3', function () {
    return view('portfolio3');
});
Route::get('/portfolio4', function () {
    return view('portfolio4');
});
Route::get('/portfolio5', function () {
    return view('portfolio5');
});
Route::get('/portfolio6', function () {
    return view('portfolio6');
});