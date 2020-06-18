<?php
/* @var $this yii\web\View */
/* @var $subnetModel common\models\Subnet */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;

$this->title = Yii::$app->name . ' - ADX Networks';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'ADX Networks';
?>
<h1>Main Networking Information</h1>

<div class="row">
    <div class="col-md-6 py-3">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">Internal Network Segments</div>
            <div class="card-body">
                <?php
                $items;
                foreach ($subnetModel as $row) {
                    $items[] = ['label' => "$row->name  ($row->short_name)",
                        'url' => [$this->context->action->id, 'networkId' => $row->id]
                    ];
                }
                echo Nav::widget(['items' => $items]);
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-6 py-3">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">Useful Networking Information</div>
            <div class="card-body">
                <?=
                Nav::widget(['items' => [
                        '<li>Administrator Logon: User: SysCat, Pswd: J8!</li>',
                        '<li>OMT On-Air User (default): User: oplog, Pswd: mts1</li>',
                        '<li>OMT General User: User: mts, Pswd: omt</li>',
                        ['label' => 'NetComm VPN Network Details', 'url' => ['info', 'view' => 'netComm']],
                        ['label' => 'External Public IP Assignments', 'url' => ['info', 'view' => 'public_ips']],
                        ['label' => 'IANA IPv4 Address Usage (RFC 1319/5735)', 'url' => ['info', 'view' => 'rfc5735_info']],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
