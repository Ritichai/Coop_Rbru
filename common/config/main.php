<?php
return [
    'timeZone'=>'Asia/Bangkok',
    'language'=>'th',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',



    'components' => [
        
         'formatter' => [
            'dateFormat' => 'dd-MM-yyyy',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
       ],
            
        
            'authManager'=>['class'=>'yii\rbac\DbManager',],
        'menu' => [
            'class' => 'common\components\Menu'
        ],


        'urlManager'=>[

            'enablePrettyUrl'=>true,
            'showScriptName'=>false,
    'rules'=>[

    ]
        ],
        'cache' => [
          'class' => 'yii\caching\FileCache',
        ],
    ],



 
];
