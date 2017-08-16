<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\SubnetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subnet-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'short_name') ?>

    <?= $form->field($model, 'cidr_block') ?>

    <?= $form->field($model, 'network_id') ?>

    <?php // echo $form->field($model, 'subnet_mask') ?>

    <?php // echo $form->field($model, 'gateway') ?>

    <?php // echo $form->field($model, 'broadcast_address') ?>

    <?php // echo $form->field($model, 'dhcp_range') ?>

    <?= $form->field($model, 'vlan_id') ?>

    <?= $form->field($model, 'vlan_name') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
