<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');//用户列表
    $router->get('products', 'ProductsController@index');//商品列表
    $router->get('products/create', 'ProductsController@create');//创建商品的页面
    $router->post('products', 'ProductsController@store');//保存商品数据
    $router->get('products/{id}/edit', 'ProductsController@edit');//编辑商品的页面
    $router->put('products/{id}', 'ProductsController@update');//更新商品信息
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');//订单列表
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');//订单详情
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');//商品发货
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');//拒绝退款
    $router->get('coupon_codes', 'CouponCodesController@index');//优惠券列表
    $router->post('coupon_codes', 'CouponCodesController@store');//添加优惠券
    $router->get('coupon_codes/create', 'CouponCodesController@create');//添加优惠券的页面
    $router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');//编辑优惠券的页面
    $router->put('coupon_codes/{id}', 'CouponCodesController@update');//更新优惠券的页面
    $router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');//删除优惠券
    $router->get('categories', 'CategoriesController@index');//类目列表
    $router->get('categories/create', 'CategoriesController@create');//创建类目的页面
    $router->get('categories/{id}/edit', 'CategoriesController@edit');//编辑类目的页面
    $router->post('categories', 'CategoriesController@store');//创建类目
    $router->put('categories/{id}', 'CategoriesController@update');//更新类目
    $router->delete('categories/{id}', 'CategoriesController@destroy');//删除类目
    $router->get('api/categories', 'CategoriesController@apiIndex');//搜索类目
});
