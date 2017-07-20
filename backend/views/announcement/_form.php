<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\FormatConverter;

/* @var $this yii\web\View */
/* @var $model common\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="input-group">
        <?php
        echo $form->field($model, 'start_date')->widget(DatePicker::className(), [
            'options' => [
                'autofocus' => true,
                'placeholder' => Yii::$app->params['datePickerFormat'],
            ],
            'size' => 'lg',
            'clientOptions' => [
                'autoclose' => true,
                'showTodayButton' => true,
                'format' => Yii::$app->params['datePickerFormat'],
            ]
        ]);
        ?>
        <span class="input-group-addon"> to </span>
        <?php
        echo $form->field($model, 'end_date')->widget(DatePicker::className(), [
            'options' => ['placeholder' => 'Until Further Notice'],
            'size' => 'lg',
            'clientOptions' => [
                'autoclose' => true,
                'format' => Yii::$app->params['datePickerFormat'],
            ]
        ]);
        ?>
    </div>

    <?= $form->field($model, 'announcement')->textarea(['rows' => 6, 'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
