<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\IpAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $subnetModel common\models\Subnet */

use yii\bootstrap4\Html;
use yii\grid\GridView;
use common\models\IpAssignment;

$this->title = Yii::t('app', 'Network IP Assignments');
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['/engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['/engineering/local-network']];
$this->params['breadcrumbs'][] = $subnetModel->name;
?>

<div class="ip-assignment-index">

    <h1><?= Html::encode("{$subnetModel->name} IP Assignments") ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Network Segment Information'), '#netinfo', ['class' => 'btn btn-info']); ?>
        <?php //= Html::a(Yii::t('app', 'Create Ip Assignment'), ['create'], ['class' => 'btn btn-success']) ?>
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
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>

<div id="netinfo" class="card shadow">
    <div class="card-header text-light bg-info">Network Segment Information</div>
    <div class="card-body">
        <ul>
            <li><?= $subnetModel->getAttributeLabel('cidr_block') ?>: <b><?= $subnetModel->cidr_block; ?></b></li>
            <li><?= $subnetModel->getAttributeLabel('network_id') ?>: <b><?= $subnetModel->network_id; ?></b></li>
            <li><?= $subnetModel->getAttributeLabel('subnet_mask') ?>: <b><?= $subnetModel->subnet_mask; ?></b></li>
            <li><?= $subnetModel->getAttributeLabel('gateway') ?>: <b><?= $subnetModel->gateway; ?></b></li>
            <li><?= $subnetModel->getAttributeLabel('broadcast_address') ?>: <b><?= $subnetModel->broadcast_address; ?></b></li>
            <li><?= $subnetModel->getAttributeLabel('dhcp_range') ?>: <b><?= $subnetModel->dhcp_range; ?></b></li>
            <?php if ($subnetModel->vlan_id > 0): ?>
                <li><?= $subnetModel->getAttributeLabel('vlan_id') ?>: <b><?= "{$subnetModel->vlan_id} ({$subnetModel->vlan_name})"; ?></b></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
