<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1 class="btn-s"><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput()->hint(null) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group text-center">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
 
            <p>If you forgot your password? 
                    <?= Html::a('Request Reset', ['site/request-password-reset'],['class'=>'btn btn-danger btn-sm']) ?>
            </p>
            <p>Don't have an account? <?= Html::a(Yii::t('app', 'Signup'), ['/site/signup'],['class'=>'btn btn-success  btn-sm']); ?></p>


        </div>
    </div>
</div>
