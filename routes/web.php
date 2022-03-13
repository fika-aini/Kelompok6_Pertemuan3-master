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
    return view('index', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/cart', function () {
    return view('cart', [
        "title" => "Cart"
    ]);
});
Route::get('/category', function () {
    return view('category', [
        "title" => "Category"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
    "title" => "Contact"
    ]);
});
Route::get('/details', function () {
    return view('details', [
    "title" => "Details"
    ]);
});
Route::get('/myaccount', function () {
    return view('myaccount', [ 
    "title" => "My Account"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});
Route::get('/specials', function () {
    return view('specials', [
        "title" => "Specials"
    ]);
});

Auth::routes();