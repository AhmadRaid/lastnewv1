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


Route::get('index','Site\SiteController@index');
Route::get('newspage/{id}','Site\SiteController@newspage')->name('Site.newspage');
Route::get('index','Site\SiteController@index');
Route::get('index','Site\SiteController@index');
