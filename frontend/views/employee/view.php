<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = Yii::t('app', "{fullName}'s Profile", [
            'fullName' => $model->profile->fullname
        ]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Profile');
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'email:email',
            'profile.cell_phone',
            'profile.home_phone',
            'profile.department.dept_name',
            'profile.extension',
            'profile.speed_dial',
            'profile.is_management:boolean',
            'profile.hire_date',
            [
                'attribute' => 'profile.birth_date',
                'value' => date('F jS', $model->profile->birth_date),
            ],
            'profile.spouse_name',
            'profile.aniversary_date',
            'profile.address',
            'profile.city',
            'profile.state',
            'profile.postal_code',
            'last_login:datetime',
        ],
    ])
    ?>
</div>
