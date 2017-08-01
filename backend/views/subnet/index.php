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
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

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
                'attribute' => 'name',
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'cidr_notation',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'subnet_mask',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'gateway_id',
                'enableSorting' => false,
                'headerOptions' => ['class' => 'text-center'],
                'value' => function($data) {
            return substr($data->network_id, 0, strripos($data->network_id, '.') + 1) . $data->gateway_id;
        },
            ],
            // 'broadcast_address',
            [
                'attribute' => 'dhcp_range',
                'enableSorting' => false,
            ],
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
