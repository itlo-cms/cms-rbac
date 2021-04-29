<?php
return [
    'modules' => [
        'rbac' => [
            'controllerNamespace' => 'itlo\cms\rbac\console\controllers',
        ]
    ],

    'controllerMap' => [
        'migrate' => [
            'migrationPath' => [
                '@itlo/cms/rbac/migrations',
            ],
        ],
    ]
];