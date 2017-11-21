<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\IpAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\IpAssignment;

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
        'layout' => "{summary}\n{pager}\n{items}\n{pager}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ipv4_address',
            [
                'attribute' => 'host_type',
                'filter' => Html::activeDropDownList($searchModel, 'host_type', IpAssignment::getHostTypeList(), ['class' => 'form-control', 'prompt' => 'All Types']),
            ],
            //'host_type_id',
            'host_name',
            'host_purpose',
            'host_location',
            [
                'attribute' => 'public_access_ip',
                'filter' => false,
                'enableSorting' => false,
            ],
            [
                'attribute' => 'port_access_info',
                'filter' => false,
                'enableSorting' => false,
                'format' => 'ntext',
            //'value' => 'nl2br($data->port_access_info)',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
            ],
        ],
    ]);
    ?>
</div>
