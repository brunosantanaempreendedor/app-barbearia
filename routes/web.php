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

Route::get('/',  'PaginaInicialController@website')->name('website');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/receipt', 'HomeController@receipt')->name('receipt');

Route::resource('client', 'ClientController');
Route::resource('unit', 'UnitsController');
Route::resource('barber', 'BarbersController');
Route::resource('service', 'ServicesController');
Route::resource('product', 'ProductController');
Route::resource('schedule', 'SchedulingController');
Route::resource('contacts', 'ContactsController');
Route::resource('footer', 'FooterController');
Route::resource('about', 'AboutController');
Route::resource('calender', 'CalenderController');


