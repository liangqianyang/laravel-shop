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

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');//商品列表页
Route::get('products/{product}', 'ProductsController@show')->name('products.show');//商品详情页
Auth::routes();

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth']], function () {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');//创建收货地址的页面
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');//新增
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');//编辑收货地址的页面
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');//更新数据
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');//删除收货地址
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');//收藏商品
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');//取消收藏

});

