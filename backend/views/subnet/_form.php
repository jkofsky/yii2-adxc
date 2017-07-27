<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subnet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subnet-form">

    <?php
    $form = ActiveForm::begin([
                'layout' => 'horizontal',
    ]);
    ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'network_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subnet_mask')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gateway')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'broadcast_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidr_notation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dhcp_range')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vlan_id')->textInput() ?>

    <?= $form->field($model, 'vlan_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
