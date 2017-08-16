<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SubnetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;

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
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
            ],
            [
                'attribute' => 'name',
                'headerOptions' => ['style' => 'text-align: left;'],
            ],
            [
                'attribute' => 'cidr_block',
                'enableSorting' => false,
            ],
            [
                'attribute' => 'subnet_mask',
                'enableSorting' => false,
            ],
            [
                'attribute' => 'gateway',
                'enableSorting' => false,
//                'value' => function($data) {
//            return substr($data->network_id, 0, strripos($data->network_id, '.') + 1) . $data->gateway_id;
//        },
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
