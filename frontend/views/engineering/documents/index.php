<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' - Documents & Manuals';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'Documents';

//$this->menu = $this->getSidebarMenu();
?>
<h1 class="gradBackground"><?php echo Html::encode('Documents') ?></h1>

<p>Something Goes here.</p>
