<?php
/* @var $this yii\web\View */
/* @var $subnetModel common\models\Subnet */

use kartik\helpers\Html;
use yii\bootstrap\Nav;

$this->title = Yii::$app->name . ' - ADX Networks';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'ADX Networks';
?>
<h1>Main Networking Information</h1>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-adxc">
            <div class="panel-heading">Internal Network Segments</div>
            <div class="panel-body">
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

    <div class="col-md-6">
        <div class="panel panel-adxc">
            <div class="panel-heading">Useful Networking Information</div>
            <div class="panel-body">
                <?=
                Nav::widget(['items' => [
                        '<li>Administrator Logon: User: SysCat, Pswd: J8</li>',
                        '<li>OMT On-Air User (default): User: oplog, Pswd: mts</li>',
                        '<li>OMT General User: User: mts, Pswd: omt</li>',
                        ['label' => 'NetComm WAN Network Details', 'url' => ['info', 'view' => 'netComm']],
                        ['label' => 'External Public IP Assignments', 'url' => ['info', 'view' => 'public_ips']],
                        ['label' => 'IANA IPv4 Address Usage (RFC 1319/5735)', 'url' => ['info', 'view' => 'rfc5735_info']],
                    ],
                ]);
                ?>
            </div>
            <div class="panel-footer" style="font-family: monospace">Passwords: 
                <?= Html::bsLabel('G8Blu3$Go', 'danger', ['style' => 'font-size: 100%']); ?>
                <?= Html::bsLabel('C9IwSWmB', 'success', ['style' => 'font-size: 100%']); ?>
                <?= Html::bsLabel('XP1Med9I', 'warning', ['style' => 'font-size: 100%']); ?>
                <?= Html::bsLabel('N0$a1nt$', 'primary', ['style' => 'font-size: 100%']); ?>
            </div>
        </div>
    </div>
</div>
