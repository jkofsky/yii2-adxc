<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Announcement */

$this->title = 'Announcement # ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Announcements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-view">

    <h1><?= Html::encode('Viewing ' . $this->title) ?></h1>

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
        <?= Html::a(Yii::t('app', 'Create Announcement'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'start_date:date',
            [
                'attribute' => 'end_date',
                'format' => $model->end_date != null ? 'date' : 'html',
                'value' => $model->end_date != null ? $model->end_date : '<span class="hint-block">Until Further Notice</span>',
            ],
            'announcement',
            'postedBy.username',
        ],
    ])
    ?>

</div>
