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
})->name('recrutement');

Route::get('/contact', function () {
    return view('contact');
});

/*PRE-INSCRIPTION*/

Route::get('/pre_inscription', "Admin\StudentsController@index")->name('pre_inscription');
Route::post('/pre_inscription', "Admin\StudentsController@store")->name('pre_inscription_store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

/*Admin Routes*/
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

	Route::resource('users', 'UsersController');
});