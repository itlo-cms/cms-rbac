<?php
return [

    'components' => [
        'authManager' => [
            'class' => 'itlo\cms\rbac\CmsManager',
        ],

        'i18n' => [
            'translations' => [
                'skeeks/rbac' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@itlo/cms/rbac/messages',
                    'fileMap' => [
                        'itlo/rbac' => 'main.php',
                    ],
                ]
            ]
        ],
    ],

    'modules' => [
        'rbac' => [
            'class' => 'itlo\cms\rbac\RbacModule',
        ]
    ]
];