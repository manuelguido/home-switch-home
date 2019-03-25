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
    return view('home');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () { //Acomodar enviando parametros del usuario
    return view('profile');
});

Route::get('/booking', function () { //Acomodar enviando parametros del usuario
    return view('booking');
});

Route::get('/notifications', function () { //Acomodar enviando parametros del usuario
    return view('notifications');
});