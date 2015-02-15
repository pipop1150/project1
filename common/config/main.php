<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'urlManager' => [
    		// here is your backend URL rules
    		'enablePrettyUrl' => true,
    		'showScriptName' => false,
    	],
//     	'urlManagerFrontend' => [
//     		'class' => 'yii\web\urlManager',
//     		'baseUrl' => '/project1/frontend/web',
//     		'enablePrettyUrl' => true,
//     		'showScriptName' => false,
//     	],
    ],
];
