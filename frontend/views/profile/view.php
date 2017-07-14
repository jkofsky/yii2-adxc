<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = Yii::t('app', 'My Profile');

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'first_name',
            'last_name',
            'address',
            'city',
            'state',
            'postal_code',
            'cell_phone',
            'home_phone',
            'birth_date:date',
            'aniversary_date:date',
            'spouse_name',
            'hire_date:date',
            'department.dept_name',
            'is_management:boolean',
            'extension',
            'speed_dial',
            'created_at:date',
            'updated_at:date',
        ],
    ])
    ?>

</div>
