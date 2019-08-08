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

Auth::routes();//登陆,注册

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
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');//收藏列表
    Route::post('cart', 'CartController@add')->name('cart.add');//添加购物车
    Route::get('cart', 'CartController@index')->name('cart.index');//购物车列表
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');//移除购物车
    Route::post('orders', 'OrdersController@store')->name('orders.store');//提交订单
    Route::get('orders', 'OrdersController@index')->name('orders.index');//订单列表
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');//订单详情页
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');//支付宝支付
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');//支付宝支付前端回调
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');//确认收货
    Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');//评价页面
    Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');//评价订单
    Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');//退款申请
    Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');//检查优惠券信息
    Route::post('crowdfunding_orders', 'OrdersController@crowdfunding')->name('crowdfunding_orders.store');//众筹商品下单
    Route::post('payment/{order}/installment', 'PaymentController@payByInstallment')->name('payment.installment');//分期付款
    Route::get('installments', 'InstallmentsController@index')->name('installments.index');//分期付款列表
    Route::get('installments/{installment}', 'InstallmentsController@show')->name('installments.show');//分期付款详情页
    Route::get('installments/{installment}/alipay', 'InstallmentsController@payByAlipay')->name('installments.alipay');//分期支付支付宝支付
    Route::get('installments/alipay/return', 'InstallmentsController@alipayReturn')->name('installments.alipay.return');//分期支付前端支付宝回调
});
Route::get('products/{product}', 'ProductsController@show')->name('products.show');//商品详情页
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');//支付宝支付后端回调
Route::post('installments/alipay/notify', 'InstallmentsController@alipayNotify')->name('installments.alipay.notify');//分期支付支付宝支付后端回调
Route::post('installments/wechat/refund_notify', 'InstallmentsController@wechatRefundNotify')->name('installments.wechat.refund_notify');//微信退款回调


