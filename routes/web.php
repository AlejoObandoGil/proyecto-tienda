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

Route::get('/', 'HomeController@index')->name('home');

Route::get('index', 'Admin\ProductController@index')->name('admin.product.index');
Route::post('admin/create', 'Admin\ProductController@create')->name('admin.product.create');
Route::get('admin/edit/{Product}', 'Admin\ProductController@edit')->name('admin.product.edit');
Route::post('admin/update/{Product}', 'Admin\ProductController@update')->name('admin.product.update');
Route::delete('admin/delete/{Product}', 'Admin\ProductController@delete')->name('admin.product.delete');
