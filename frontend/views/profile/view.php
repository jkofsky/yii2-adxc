<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = $model->first_name."'s Profile";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
   </p>

    <?= DetailView::widget([
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
            'birth_date',
            'aniversary_date',
            'spouse_name',
            'hire_date',
            'department_id',
            'is_management',
            'extension',
            'speed_dial',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
