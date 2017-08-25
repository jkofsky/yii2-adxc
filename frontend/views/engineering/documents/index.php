<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$this->title = Yii::$app->name . ' - Documents & Manuals';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'Documents';

echo '<h1>' . Html::encode('Documents') . '</h1>';

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
            'url' => ['reading', 'page' => $value],
        ];
    }
}
echo Nav::widget(['items' => $menuItems]);
