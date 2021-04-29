<?php


namespace itlo\cms\rbac\widgets\adminPermissionForRoles\assets;

use itlo\cms\base\AssetBundle;

/**
 * Class AdminPermissionForRolesWidgetAsset
 * @package skeeks\cms\rbac\widgets\adminPermissionForRoles\assets
 */
class AdminPermissionForRolesWidgetAsset extends AssetBundle
{
    public $sourcePath = '@itlo/cms/rbac/widgets/adminPermissionForRoles/assets/src';

    public $css = [];

    public $js = [
        'app.js'
    ];

    public $depends = [
        'itlo\sx\assets\Custom',
        'itlo\sx\assets\ComponentAjaxLoader'
    ];
}
