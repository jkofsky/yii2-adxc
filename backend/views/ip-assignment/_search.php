<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\IpAssignmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ip-assignment-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'host_type_id') ?>

    <?= $form->field($model, 'subnet_id') ?>

    <?= $form->field($model, 'ipv4_address') ?>

    <?= $form->field($model, 'host_type') ?>

    <?php // echo $form->field($model, 'host_name') ?>

    <?php // echo $form->field($model, 'host_purpose') ?>

    <?php // echo $form->field($model, 'host_location') ?>

    <?php // echo $form->field($model, 'port_access_info') ?>

    <?php // echo $form->field($model, 'public_access_ip')  ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
