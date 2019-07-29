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
});
