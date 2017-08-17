<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\IpAssignment */

$this->title = Yii::t('app', 'Create IP Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'IP Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ip-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
