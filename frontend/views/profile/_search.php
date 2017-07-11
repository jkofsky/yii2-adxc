<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'cell_phone') ?>

    <?php // echo $form->field($model, 'home_phone') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'aniversary_date') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'hire_date') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'is_management') ?>

    <?php // echo $form->field($model, 'extension') ?>

    <?php // echo $form->field($model, 'speed_dial') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
