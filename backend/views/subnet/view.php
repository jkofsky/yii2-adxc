<?php
/* @var $this yii\web\View */
/* @var $model common\models\Subnet */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subnets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subnet-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'short_name',
            'cidr_block',
            'network_id',
            'subnet_mask',
            'gateway',
            'dhcp_range',
            'broadcast_address',
            'vlan_id',
            'vlan_name',
        ],
    ])
    ?>

</div>
