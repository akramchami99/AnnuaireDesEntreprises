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

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/connect', 'PagesController@connect');
Route::get('/annuaire', 'PagesController@annuaire');
Route::get('/signup', 'PagesController@signup');

Route::resource('Entreprises','EntrepriseController');