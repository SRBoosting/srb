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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/faq', function () {
    return view('faq', ['pageName' => 'FAQ']);
});

Route::get('/calculator', function () {
    return view('calculator', ['pageName' => 'Calculator']);
});

Route::get('/checkout', function () {
    return view('checkout', ['pageName' => 'Checkout']);
});

Route::get('/guest', function () {
    return view('guest', ['pageName' => 'Proceede as a Guest']);
});

Route::post('/guest', function () {
    return view('guestToPaypal', ['pageName' => 'Redirecting to Paypal...']);
});