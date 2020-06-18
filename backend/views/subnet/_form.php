<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

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

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidr_block')->textInput(['maxlength' => true, 'placeholder' => 'ie: 192.168.1.0/24']) ?>

    <?= $form->field($model, 'gateway')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dhcp_range')->textInput(['maxlength' => true, 'placeholder' => '100-199']) ?>

    <?= $form->field($model, 'vlan_id')->textInput()->hint('If entered, must be between 1-4096') ?>

    <?= $form->field($model, 'vlan_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
