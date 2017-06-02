<?php

/**
 * Restful API Foundation
 * Api 基础框架
 *
 * @author Koma <komazhang@foxmail.com>
 * @date 2017-05-19
 *
 */

define('ROOT_PATH',    dirname(__DIR__));
define('CONF_PATH',    ROOT_PATH.'/conf');
define('SRC_PATH',     ROOT_PATH.'/src');
define('RUNTIME_PATH', ROOT_PATH.'/runtime');

/******* 用户自定义常量区 ********/

define('APP_NAMESPACE', 'App'); //修改应用名称,需要修改对应的composer.json
define('APP_PATH', SRC_PATH.'/'.APP_NAMESPACE);
define('APP_DEBUG', true);

/******* 用户自定义常量区 ********/

define('MODEL_PATH', APP_PATH.'/Model');

require ROOT_PATH.'/vendor/autoload.php';

$app = new \ApiFoundation\ApiFoundation();
$app->run();
