<?php

// use App\Blog;
// use Illuminate\Http\Request;

Route::get('test/role/create', 'Admin\RoleController@create');
Route::get('test/role/assign', 'Admin\RoleController@assign');

// Views Cart
Route::get('/', 'CartController@shop')->name('shop');
Route::get('/show/{product}', 'CartController@show')->name('show');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', 'CartController@cart')->name('cart.index');
    // Crud cart
    Route::post('/add', 'CartController@add')->name('cart.store');
    Route::post('/update', 'CartController@update')->name('cart.update');
    Route::post('/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/clear', 'CartController@clear')->name('cart.clear');
    Route::group(['middleware' => ['role:admin']], function () {
        // views Product admin
        Route::get('/admin', 'Admin\ProductController@index')->name('admin.product.index');
        Route::get('admin/edit/{Product}', 'Admin\ProductController@edit')->name('admin.product.edit');
        // crud Product admin
        Route::post('admin/create', 'Admin\ProductController@create')->name('admin.product.create');
        Route::post('admin/update/{Product}', 'Admin\ProductController@update')->name('admin.product.update');
        Route::delete('admin/delete/{Product}', 'Admin\ProductController@delete')->name('admin.product.delete');
    });
});
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::post('/file/save', function(Request $request){
        $blog = new Blog($request->all());
        // $blog->titulo = $request->titulo;
        if ($request->hasFile('file')){
            $name = $request->file->getClientOriginalName();
            $blog->file = $name;

            $request->file('file')->storeAs('img', $name);
            // $request->file->move(public_path('images/'), $name);
        }
        $blog->save();
    })->name('file.save');



