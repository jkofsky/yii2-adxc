<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/* @var $department \common\models\Department::getDepartmentList() */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

if ($model->scenario == 'employee') {
    $this->title = 'Email Employees';
} else {
    $this->title = 'Contact Us';
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?php
            if ($model->scenario == 'employee') {
                // Called from EmployeeController
                ?>
                <p>
                    <?= Html::label('Send to', 'department') ?>

                    <?=
                    Html::activeDropDownList($model, 'department', \common\models\Department::getDepartmentList(), ['class' => 'form-control', 'prompt' => 'All Employees'])
                    ?>
                </p>
                <?php
            } else {
                // Called from SiteContoller
                ?>
                <p>
                    If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                </p>
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>
            <?php } ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?=
            $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ])
            ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
