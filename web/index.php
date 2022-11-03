<?php

// Set headers to NOT cache a page
header("Last-Modified: Wed, 15 Nov 1995 04:58:08 GMT");
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past


$request_uri = $_SERVER['REQUEST_URI'];
$domain = $_SERVER['SERVER_NAME'];

if ($request_uri === "/index.php" || $request_uri === "/index.htm" || preg_match("(//)", $request_uri)) {
    header("Location: /", true, 301);
    exit();
}

if (stristr($domain, ".web.local")) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    defined('YII_DEBUG') || define('YII_DEBUG', true);
    defined('YII_ENV') || define('YII_ENV', 'dev');
}

// регистрация загрузчика классов Composer
require __DIR__ . '/../vendor/autoload.php';
// подключение файла класса Yii
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// загрузка конфигурации приложения
$config = require __DIR__ . '/../config/web.php';

try {
    (new yii\web\Application($config))->run();
} catch (\yii\base\InvalidConfigException $e) {
}
