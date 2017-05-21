<?php

/**
 * 环信工单 Restful API 项目
 *
 * @author Koma <komazhang@foxmail.com>
 * @date 2017-05-19
 *
 */

define('BASE_DIR', dirname(__DIR__));
define('CONF_DIR', BASE_DIR.'/conf');
define('MODEL_DIR', BASE_DIR.'/src/Model');

require BASE_DIR.'/vendor/autoload.php';

try {
    $app = new \EasemobTickets\App();
    $app->run();
} catch (Exception $e) {
    var_dump($e);
}
