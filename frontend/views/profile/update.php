<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = Yii::t('app', 'Update Profile');

$this->params['breadcrumbs'][] = ['label' =>
    Yii::t('app', 'My Profile'),
    'url' => ['view']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
