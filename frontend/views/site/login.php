<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="row">
        <div class="card shadow col-lg-5">
            <div class="card-header"><h1><?= Html::encode($this->title) ?></h1></div>
            <div class="card-body">
                <p class="text-small alert-danger p-1">Please fill out the following fields to login:</p>


                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput()->hint(null) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group text-center">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

            <div class="card-footer">
                <p> 
                    <?= Html::a('If you forgot your password?<br>Request Reset', ['site/request-password-reset'], ['class' => 'btn alert-danger btn-block']) ?>
                </p>
                <p> <?= Html::a("Don't have an account? &ndash; Signup", ['/site/signup'], ['class' => 'btn alert-success btn-block']); ?></p>
            </div>

        </div>
    </div>
</div>
