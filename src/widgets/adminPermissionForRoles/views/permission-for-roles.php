<?php

/* @var $this yii\web\View */
/* @var $widget \itlo\cms\widgets\rbac\PermissionForRoles */
?>
<div id="<?= $widget->id; ?>" class="form-group">
    <? if ($widget->label): ?>
        <label><?= $widget->label; ?></label>
    <? endif; ?>

    <? /*= \yii\helpers\Html::checkboxList(
        'sx-permission-' . $widget->permissionName,
        $widget->permissionRoles,
        \yii\helpers\ArrayHelper::map(\Yii::$app->authManager->getRoles(), 'name', 'description')
    ); */ ?>
    <?= \itlo\cms\widgets\Select::widget([
        'multiple' => true,
        'name' => 'sx-permission-' . $widget->permissionName,
        'value' => $widget->permissionRoles,
        'items' => $widget->items
    ]); ?>

    <? if ($widget->permissionDescription) : ?>
        <div style="font-size: 12px;"><?= $widget->permissionDescription; ?></div>
    <? endif; ?>

    <? $this->registerJs(<<<JS
    (function(sx, $, _)
    {
        new sx.classes.PermissionForRoles({$widget->getClientOptionsJson()});
    })(sx, sx.$, sx._);
JS
    ) ?>
</div>
