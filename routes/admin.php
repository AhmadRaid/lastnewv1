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


Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {

    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

});


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
});


Route::get('index', 'Admin\DashboardController@index')->name('admin.dashboard');

////////////////////////////////// Begin Departments Routes //////////////////////////////////////////////////////
Route::group(['prefix' => 'Departments', 'namespace' => 'Admin'], function () {

    Route::get('index', 'DepartmentController@index')->name('Admin.departments');
    Route::get('create', 'DepartmentController@create')->name('Admin.departments.create');
    Route::post('store', 'DepartmentController@store')->name('Admin.departments.store');
    Route::get('image-upload', 'ImageUploadController@imageUpload')->name('Admin.departments.uploadimage');
    Route::post('image-upload_folder', 'saveProductImages@saveProductImages')->name('Admin.departments.postuploadimage');
    Route::post('image-upload_db', 'saveProductImages@saveProductImages')->name('Admin.departments.postuploadimage');


});

////////////////////////////////// End Departments Routes //////////////////////////////////////////////////////

////////////////////////////////// Begin News Routes //////////////////////////////////////////////////////

Route::group(['prefix' => 'News', 'namespace' => 'Admin'], function () {

    Route::get('index', 'NewsController@index')->name('Admin.News');
    Route::get('create', 'NewsController@create')->name('Admin.News.create');
    Route::post('store', 'NewsController@store')->name('Admin.News.store');
    Route::get('image/{id}', 'NewsController@getimage')->name('Admin.news.uploadimage');
    Route::post('image/folder', 'NewsController@saveProductImagesFolder')->name('Admin.news.post_upload_image_folder');
    Route::post('image-upload-db', 'NewsController@saveProductImagesDB')->name('Admin.news.post_upload_image_db');

});

Route::group(['prefix' => 'Opinion', 'namespace' => 'Admin'], function () {

    Route::get('index', 'OpinionController@index')->name('Admin.Opinion');
    Route::get('create', 'OpinionController@create')->name('Admin.Opinion.create');
    Route::post('store', 'OpinionController@store')->name('Admin.Opinion.store');




});
