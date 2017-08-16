<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IpAssignment */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ip Assignment',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ip Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ip-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
