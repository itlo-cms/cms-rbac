<?php

return
    [
        'users' =>
            [
                'items' =>
                    [
                        [
                            "label" => \Yii::t('itlo/rbac', 'Roles'),
                            "url" => ["rbac/admin-role"],
                            "img" => ['itlo\cms\rbac\assets\RbacAsset', 'icons/users-role.png'],
                            'enabled' => true,
                            'priority' => 500,
                        ],

                        [
                            "label" => \Yii::t('itlo/rbac', 'Privileges'),
                            "url" => ["rbac/admin-permission"],
                            "img" => ['itlo\cms\rbac\assets\RbacAsset', 'icons/access.png'],
                            'enabled' => true,
                            'priority' => 500,
                        ],
                    ]
            ]
    ];