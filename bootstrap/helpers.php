<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/7/17
 * Time: 9:51
 */

/**
 * 将当前请求的路由名称转换为CSS类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
