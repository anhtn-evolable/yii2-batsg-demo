<?php

$common = require(__DIR__ . '/common/common.php');


$config = [
    'id' => 'basic-console',
    'controllerNamespace' => 'app\commands',
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
    'components' => [
        'session' => [ // for use session in console application
            'class' => 'yii\web\Session'
        ],
    ],
];

$config = array_merge_recursive($common, $config);

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
