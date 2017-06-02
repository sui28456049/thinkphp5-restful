<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use \think\Route;
// 注册路由到index模块的News控制器的read操作
// Route::rule('v1/:id','index/index/sui','post|get');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],

    '[v1]' => [
        'user' => ['demo/User/restful',], //用户模块接口
    ],

    'accessToken'=>'demo/Auth/accessToken',//请求获取 /accessToken?client_id=20882088&secret=nGk5R2wrnZqQ02bed29rjzax1QWRIu1O 或者 /accessToken headers Basic MjA4ODIwODg6bkdrNVIyd3JuWnFRMDJiZWQyOXJqemF4MVFXUkl1MU8=
    'wiki'=>'demo/Wiki/index',//文档

];
