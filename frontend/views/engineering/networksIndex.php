<?php
/* @var $this yii\web\View */
/* @var $ipModel Ips */
/* @var $networkModel Network */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$this->title = Yii::$app->name . ' - ADX Networks';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'ADX Networks';
?>
<h1>ADX Main Internal Network Segments</h1>

<div class="row"><div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Internal Network Segments</div>
            <div class="panel-body">
                <?php
                $items = array();
//            foreach ($networkModel as $row) {
//                $items[] = array(
//                    'label' => $row->subnet_id . ' - ' . $row->name,
//                    'url' => array($this->action->id, 'networkId' => $row->id),
//                );
//            }
                echo Nav::widget(['items' => $items]);
                ?>  
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Useful Networking Information</div>
            <div class="panel-body">
                <?=
                Nav::widget(['items' => [
                        '<li>Administrator Logon: User: SysCat, Pswd: J8</li>',
                        '<li>OMT General User: User: mts, Pswd: omt</li>',
                        '<li>OMT On-Air User (default): User: oplog, Pswd: mts</li>',
                        ['label' => 'NetComm WAN Network Details', 'url' => array('info', 'view' => 'netComm')],
                        ['label' => 'External Public IP Assignments', 'url' => array('info', 'view' => 'public_ips')],
                        ['label' => 'IANA IPv4 Address Usage (RFC 1319/5735)', 'url' => array('info', 'view' => 'rfc5735_info')],
                        '<li class="nav-divider"></li>',
                    ],
                ]);
                ?>
                <p style="font-family: monospace">Password: $6Blu3Go | C9IwSWmB | XP1Med9I | N0$a1nt$ </p>
            </div>
        </div>
    </div>
</div>
