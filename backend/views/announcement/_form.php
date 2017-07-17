<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DateRangePicker;
use yii\helpers\FormatConverter;

/* @var $this yii\web\View */
/* @var $model common\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">
    <?= '<pre>' . print_r(Yii::$app->request->post(), true) . '</pre>'; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?=
    DateRangePicker::widget([
        'form' => $form, // best for correct client validation
        'model' => $model,
        'attribute' => 'start_date',
        'options'=>['placeholder'=>'mm/dd/yyyy'],
        'value' => Yii::$app->formatter->asDate($model->start_date, 'mm/dd/yyyy'),
        'attributeTo' => 'end_date',
        'optionsTo'=>['placeholder'=>'mm/dd/yyyy - Blank for UFN'],
        //'size' => 'lg',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy',
        ]
    ]);
    ?>

    <?= $form->field($model, 'announcement')->textarea(['rows' => 4, 'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
