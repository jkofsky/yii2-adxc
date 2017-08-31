<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode("User: $this->title") ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'profile.first_name',
            'profile.last_name',
            'email:email',
            'profile.department.dept_name',
            'is_active:boolean',
            'role_id',
            'profile.hire_date:date',
            'profile.is_management:boolean',
            'profile.address',
            'profile.city',
            'profile.state',
            'profile.postal_code',
            'profile.cell_phone',
            'profile.home_phone',
            [
                'attribute' => 'profile.birth_date',
                'format' => ['date', 'php:F jS'],
            ],
            'profile.spouse_name',
            'profile.aniversary_date:date',
            'profile.extension',
            'profile.speed_dial',
            'last_login:datetime',
        ],
    ])
    ?>

</div>
