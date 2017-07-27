<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SubnetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->formatter->nullDisplay = '';

$this->title = Yii::t('app', 'Subnets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subnet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Subnet'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'headerRowOptions' => ['class' => 'text-center'],
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'id',
                'headerOptions' => ['class' => 'col-sm-1 text-center'],
            ],
            [
                'attribute' => 'name',
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'network_id',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'subnet_mask',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'gateway',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            // 'broadcast_address',
            // 'cidr_notation',
            // 'dhcp_range',
            [
                'attribute' => 'vlan_id',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'vlan_name',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
        ],
    ]);
    ?>
</div>
