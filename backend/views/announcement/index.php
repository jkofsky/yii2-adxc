<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\AnnouncementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Announcements');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Announcement'), ['create'], ['class' => 'btn btn-success']) ?>
        <?=
        Html::a(Yii::t('app', 'Purge Expired'), ['purge'], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to purge announcements?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '<span class="hint-block">Until Further Notice</span>'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'start_date:date',
            'end_date:date',
            'announcement',
            [
                'attribute' => 'postedBy.username',
                'header' => 'Posted By',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
