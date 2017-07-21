<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'start_date')->widget(DateRangePicker::className(), [
        'options' => [
            'placeholder' => Yii::$app->params['datePickerFormat'],
        ],
        'attributeTo' => 'end_date',
        'optionsTo' => [
            'placeholder' => 'Until Further Notice'
        ],
        'size' => 'lg',
        'clientOptions' => [
            'autoclose' => true,
            'keepEmptyValues' => true,
            'format' => Yii::$app->params['datePickerFormat'],
            'startDate' => '-1d',
            'clearBtn' => true,
            'todayBtn' => true,
            'todayHighlight' => true,
        ]
    ]);
    ?>

    <?= $form->field($model, 'announcement')->textarea(['rows' => 6, 'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
