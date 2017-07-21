<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\models\Department;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <div class="row">
        <?php
        $form = ActiveForm::begin([
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-3',
                            'offset' => 'col-sm-offset-2',
                            'wrapper' => 'col-sm-8',
                        ],
                    ],
        ]);
        ?>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">Personal Information</div>
                <div class="panel-body">
                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'cell_phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'home_phone')->textInput(['maxlength' => true]) ?>

                    <?=
                    $form->field($model, 'birth_date')->widget(DatePicker::className(), [
                        'options' => [
                            'placeholder' => Yii::$app->params['datePickerFormat'],
                        ],
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => Yii::$app->params['datePickerFormat'],
                            //'startDate' => '-1d',
                            'clearBtn' => true,
                            'todayBtn' => true,
                            'todayHighlight' => true,
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'spouse_name')->textInput(['maxlength' => true]) ?>

                    <?=
                    $form->field($model, 'aniversary_date')->widget(DatePicker::className(), [
                        'options' => [
                            'placeholder' => Yii::$app->params['datePickerFormat'],
                        ],
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => Yii::$app->params['datePickerFormat'],
                            //'startDate' => '-1d',
                            'clearBtn' => true,
                            'todayBtn' => true,
                            'todayHighlight' => true,
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">Employment Information</div>
                <div class="panel-body">
                    <?=
                    $form->field($model, 'hire_date')->widget(DatePicker::className(), [
                        'options' => [
                            'placeholder' => Yii::$app->params['datePickerFormat'],
                        ],
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => Yii::$app->params['datePickerFormat'],
                            //'startDate' => '-1d',
                            'clearBtn' => true,
                            'todayBtn' => true,
                            'todayHighlight' => true,
                        ]
                    ]);
                    ?>

                    <?=
                    $form->field($model, 'department_id')->dropDownList(
                            Department::getDepartmentList(), [
                        'prompt' => 'Not Assigned'
                    ])
                    ?>

                    <?= $form->field($model, 'is_management')->checkbox() ?>

                    <?= $form->field($model, 'extension')->textInput() ?>

                    <?= $form->field($model, 'speed_dial')->textInput() ?>

                </div>
            </div>
        </div>
        <div class="form-group">
            <?=
            Html::submitButton(
                    $model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            );
            ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
