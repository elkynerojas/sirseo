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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//WebController
Route::get('/', 'Web\WebController@Welcome')->name('welcome');
Route::get('home', 'Web\WebController@Home')->middleware('auth')->name('home');
Route::get('contact', 'Web\WebController@Contact')->name('contact');
Route::get('about', 'Web\WebController@about')->name('about');

Route::resource('puestos', 'Admin\PuestoController');
Route::resource('minuta', 'Admin\MinutaController');
Route::resource('visitantes', 'Admin\VisitanteController');
