<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$this->title = Yii::$app->name . ' - Useful Info';
$this->params['breadcrumbs'][] = 'Useful Reading';

echo '<h1>' . Html::encode('Just Some Useful Information') . '</h1>';

$menuItems = array();

foreach (scandir(dirname(__FILE__)) as $value) {

    if (is_dir($value)) {
        continue;
    }

    $value = pathinfo($value, PATHINFO_FILENAME);
    if ($value != 'index') {
        $label = ucwords(trim(strtolower(str_replace(array('-', '_', '.'), ' ', preg_replace('/(?<![A-Z])[A-Z]/', ' \0', $value)))));
        $menuItems[] = [
            'label' => $label,
            'url' => ['reading', 'read' => $value],
        ];
    }
}
echo Nav::widget(['items' => $menuItems]);


