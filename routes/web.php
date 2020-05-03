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
Route::get('/test', function(){
	return view('test');
});

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/services', function () {
    return view('services');
});

Route::get('/matieres', function () {
    return view('matieres');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/recrutement', function () {
    return view('recrutement');
});

Route::get('/contact', function () {
    return view('contact');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
