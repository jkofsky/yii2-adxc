<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\IpAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $subnetModel common\models\Subnet */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app', 'Network Segment');
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['/engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['/engineering/local-network']];
$this->params['breadcrumbs'][] = $subnetModel->name;
?>

<div class="ip-assignment-index">

    <h1><?= Html::encode("{$subnetModel->name} Segment") ?></h1>
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
            //'filter' => ZHtml::enumDropDownList($ipModel, 'host_type', array('prompt' => '&horbar; All &horbar;')),
            ],
            //'host_type_id',
            //'subnet_id',
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
                'value' => 'nl2br($data->port_access_info)',
            ],
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>

<h2 id="netinfo">Network Segment Information</h2>
<ul>
    <li>Network: <?php echo $subnetModel->network_id; ?></li>
    <li>Netmask: <?php echo $subnetModel->subnet_mask; ?></li>
    <li>Gateway: <?php echo $subnetModel->gateway; ?></li>
    <li>DHCP Range: <?php echo $subnetModel->dhcp_range; ?></li>
    <?php if ($subnetModel->vlan_id > 0): ?>
        <li>VLAN ID: <?php echo "{$subnetModel->vlan_id} ({$subnetModel->vlan_name})"; ?></li>
    <?php endif; ?>
</ul>
