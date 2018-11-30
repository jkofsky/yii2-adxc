<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\IpAssignment */

$this->title = Yii::t('app', "IP: {$model->ipv4_address}");
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'IP Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ip-assignment-view">

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
        <?= Html::a(Yii::t('app', 'Create Assignment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'host_type_id',
            'attribute' => 'subnet.short_name',
            'ipv4_address',
            'is_dhcp:boolean',
            'host_type',
            'host_name',
            'host_purpose',
            'host_location',
            'public_access_ip',
            'port_access_info:ntext',
        ],
    ])
    ?>

</div>
