<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
//    'modules' => [
//        'auth' => [
//            'class' => 'common\modules\auth\Module',
//        ],
//    ],
    'modules' => [
        'roxymce' => [
            'class' => 'navatech\roxymce\Module',
            'uploadFolder' => '@frontend/web/uploads/images',
            'uploadUrl' => '/uploads/images',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

//        'authManager' => [
//            'class' => 'yii\rbac\DbManager',
//        ],
    ],
];
