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

Route::get('/home', 'rutasController@home');



/*Route::get('/home', function () {
    return view('home');
});

Route::get('/eventos', function () {
    return view('events');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/galeria', function () {
    return view('gallery');
});

Route::get('/acerca', function () {
    return view('about');
});

Route::get('/contacto', function () {
    return view('contact');
});
*/