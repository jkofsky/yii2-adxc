<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\IpAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app', 'IP Assignments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ip-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create IP Assignment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ipv4_address',
            //'host_type_id',
            [
                'attribute' => 'subnet.name',
                'header' => 'Subnet',
            ],
            'host_type',
            'host_name',
            'host_purpose',
            'host_location',
            'public_access_ip',
            'port_access_info:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
            ],
        ],
    ]);
    ?>
</div>
