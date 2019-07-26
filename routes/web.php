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

Route::get('/', "PagesController@index")->name("home");
Route::get('/categories/{slug}', "PagesController@categories")->name("categories.index");
Route::get('/{slug}', "PagesController@single")->name("post.single");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
