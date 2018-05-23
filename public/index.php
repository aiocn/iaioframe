<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

define('IAIO_ROOT', __DIR__ . '/../');
define('IAIO_CORE', IAIO_ROOT . 'core/');
define('IAIO_PATH', IAIO_CORE . 'iaio/');
define('VENDOR_PATH', IAIO_CORE . 'vendor/');
define('EXTEND_PATH', IAIO_CORE . 'extend/');
define('TEMPLATE_PATH', IAIO_ROOT . 'template/');

// 加载基础文件
require __DIR__ . '/../core/thinkphp/base.php';

// 支持事先使用静态方法设置Request对象和Config对象

// 执行应用并响应
Container::get('app')->run()->send();
