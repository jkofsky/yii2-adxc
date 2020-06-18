<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = Yii::t('app', 'My Profile');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <a class=""
       <p>
               <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
               <?=
               Html::a('<span class="glyphicon glyphicon-lock"></span> ' . Yii::t('app', 'Change Password'), ['/site/change-password'], ['class' => 'btn btn-danger'])
               ?>
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
                [
                    'attribute' => 'birth_date',
                    'format' => ['date', 'php:F jS'],
                ],
                'aniversary_date:date',
                'spouse_name',
                'hire_date:date',
                'department.dept_name',
                'is_management:boolean',
                'extension',
                'speed_dial',
                'created_at:datetime',
                'updated_at:datetime',
            ],
        ])
        ?>

</div>
