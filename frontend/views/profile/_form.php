<?php
/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */

use yii\bootstrap4\Html;
use yii\helpers\FormatConverter;
use yii\bootstrap4\ActiveForm;
use common\models\Department;
use kartik\date\DatePicker;

$dateFormat = Yii::$app->formatter->asDate(time(), 'short');
$phpFormat = FormatConverter::convertDateIcuToJui(
                Yii::$app->formatter->dateFormat, 'date');
?>

<div class="container profile-form">

    <?php
    $form = ActiveForm::begin(['layout' => 'horizontal']);
    ?>
    <div class="col-md-6">
        <div class="card border border-info">
            <div class="card-header alert alert-info">Personal Information</div>
            <div class="card-body">
                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

                <?=
                $form->field($model, 'cell_phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '(999) 999-9999',
                ])
                ?>

                <?=
                $form->field($model, 'home_phone')->textInput([
                    'maxlength' => true,
                    'prompt' => '(999) 999-9999',
                ])
                ?>

                <?=
                $form->field($model, 'birth_date')->widget(DatePicker::classname(), [
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'options' => ['placeholder' => 'i.e: ' . $dateFormat],
                    'removeButton' => false,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'clearBtn' => true,
                        //'format' => $phpFormat,
                        'todayBtn' => 'linked',
                        'todayHighlight' => true,
                    ]
                ]);
                ?>

                <?= $form->field($model, 'spouse_name')->textInput(['maxlength' => true]) ?>

                <?=
                $form->field($model, 'aniversary_date')->widget(DatePicker::classname(), [
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'options' => ['placeholder' => 'i.e: ' . $dateFormat],
                    'convertFormat' => true,
                    'removeButton' => false,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'clearBtn' => true,
                        //'format' => $phpFormat,
                        'todayBtn' => 'linked',
                        'todayHighlight' => true,
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border border-success">
            <div class="card-header alert alert-success">Employment Information</div>
            <div class="card-body">
                <?=
                $form->field($model, 'hire_date')->widget(DatePicker::classname(), [
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'options' => ['placeholder' => 'i.e: ' . $dateFormat],
                    //'convertFormat' => true,
                    'removeButton' => false,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'clearBtn' => true,
                        //'format' => $phpFormat,
                        'todayBtn' => 'linked',
                        'todayHighlight' => true,
                    ]
                ]);
//                    $form->field($model, 'hire_date')->widget(DatePicker::className(), [
//                        'options' => [
//                            'class' => 'form-control',
//                            'placeholder' => 'i.e: ' . $dateFormat,
//                        ],
//                        //'dateFormat' => Yii::$app->params['ICUdatePickerFormat'],
//                        'clientOptions' => [
//                            'autoSize' => true,
//                            'changeMonth' => true,
//                            'changeYear' => true,
//                            'selectOtherMonths' => true,
//                            'showAnim' => 'fold',
//                            'showButtonPanel' => true,
//                            'showOtherMonths' => true,
//                            'format' => $juiFormat,
//                            'clearBtn' => true,
//                            'todayBtn' => true,
//                            'todayHighlight' => true,
//                        ]
//                    ]);
                ?>

                <?=
                $form->field($model, 'department_id')->dropDownList(
                        Department::getDepartmentList(), [
                    'prompt' => '- Not Assigned -'
                ])
                ?>

                <?= $form->field($model, 'extension')->textInput() ?>

                <?= $form->field($model, 'speed_dial')->textInput() ?>

            </div>
        </div>
        <div class="form-group">
            <?php if (!$model->isNewRecord) : ?>
                <p><?= $model->getAttributeLabel('updated_at') ?>:
                    <?= date('F d, Y', $model->getAttribute('updated_at')) ?></p>
            <?php endif; ?>
            <?=
            Html::submitButton(
                    $model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), [
                'class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block',
                    ]
            );
            ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
