<?php

// Route::get('test/role', function ($id) {

// });

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'Admin\ProductController@index')->name('admin.product.index');
    Route::get('admin/edit/{Product}', 'Admin\ProductController@edit')->name('admin.product.edit');

    Route::post('admin/create', 'Admin\ProductController@create')->name('admin.product.create');
    Route::post('admin/update/{Product}', 'Admin\ProductController@update')->name('admin.product.update');
    Route::delete('admin/delete/{Product}', 'Admin\ProductController@delete')->name('admin.product.delete');

    // Route::group(['middleware' => ['role:admin']], function () {
    //     Route::get('/admin', function(){
    //         return 'solo admin';
    //     });
    // });
});

Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');

Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');



