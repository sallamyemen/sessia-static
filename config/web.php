<?php

use yii\web\Cookie;

$params = require __DIR__ . '/params.php';

$config = [
    'id' => 'SESSIA',
    'name' => 'SESSIA',
    'basePath' => dirname(__DIR__),
    'timeZone' => 'Europe/Moscow', // UTC

    'language' => 'en-US',
    'sourceLanguage' => 'en-US',

    'bootstrap' => ['log'],

    'components' => [
        'session' => [
            'cookieParams' => [
                'httpOnly' => !YII_ENV_DEV,
                'secure' => !YII_ENV_DEV,
                'sameSite' => YII_ENV_DEV ? null : Cookie::SAME_SITE_STRICT,
            ]
        ],
        'cookies' => [
            'class' => 'yii\web\Cookie',
            'expire' => time() + 60 * 60 * 24,
            'httpOnly' => !YII_ENV_DEV,
            'secure' => !YII_ENV_DEV,
            'sameSite' => YII_ENV_DEV ? null : Cookie::SAME_SITE_STRICT,
        ],
        'request' => [
            'cookieValidationKey' => YII_ENV_DEV ? '12345' : 'KpdrQ2X6XefU9JJd2RoNxGliDtIE3su4',
            'class' => 'app\components\lang\LangRequest',
        ],
        'response' => [
            'on beforeSend' => function($event) {
                YII_ENV_DEV ? null : $event->sender->headers->add('X-Frame-Options', 'DENY');
            },
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => require __DIR__ . '/urlManager.php',
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                    'basePath' => '@app/messages',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => YII_DEBUG,
            'viewPath' => '@app/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'office@freedomgroupint.com',
                'password' => 'FG2017officeMail',
                'port' => 465,
                'encryption' => 'ssl',
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => true,
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'sourcePath' => null,
                ],
            ],
        ],
        /**
         * Чтобы папки в web/assets автоматически обновлялись
         * (чтобы не вычищать их вручную после каждого обновления)
         * включаем использование символических ссылок
         */
        /*'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'enableMinify' => !YII_DEBUG,
            'concatCss' => true, // concatenate css
            'minifyCss' => true, // minificate css
            'concatJs' => true, // concatenate js
            'minifyJs' => true, // minificate js
            'minifyOutput' => true, // minificate result html page
            'webPath' => '@web', // path alias to web base
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/assets/minify', // path alias to save minify result
            'jsPosition' => [ \yii\web\View::POS_END ], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true], // options for compress
            'excludeFiles' => [
                //'jquery.js', // exclude this file from minification
                //'app-[^.].js', // you may use regexp
            ],
        ],*/
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['172.23.0.1', '::1'],
    ];
}

return $config;
