<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subnet */

$this->title = Yii::t('app', 'Create Subnet');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subnets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subnet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
