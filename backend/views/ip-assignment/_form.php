<?php
/* @var $this yii\web\View */
/* @var $model common\models\IpAssignment */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\IpAssignment;
use common\models\Subnet;
?>

<div class="ip-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'subnet_id')->dropDownList(
            Subnet::getSubnetList(), [
        'prompt' => ''
    ])
    ?>

    <?= $form->field($model, 'ipv4_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_dhcp')->checkbox() ?>

    <?= $form->field($model, 'host_type')->dropDownList(IpAssignment::getHostTypeList(), ['prompt' => '']) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_purpose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'public_access_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_access_info')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
