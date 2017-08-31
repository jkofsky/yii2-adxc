<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' -  NetComm Details';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = 'NetComm Details';

//$this->menu = $this->getSidebarMenu();
?>
<h1>NetComm WAN Network Details</h1>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">WYCT Transmitter</div>
            <div class="panel-body">
                <pre>
192.168. 12.  0 | Network
255.255.255.  0 | Netmask
192.168. 12.  2 | Gateway
192.168. 12.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 12.200 | DHCP => .12.250
192.168. 12.254 |                           
                </pre>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">WNRP Transmitter</div>
            <div class="panel-body">
                <pre>
192.168. 13.  0 | Network
255.255.255.  0 | Netmask
192.168. 13.  2 | Gateway
192.168. 13.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 13.200 | DHCP => .13.250
192.168. 13.254 |                            
                </pre>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Escambia EOC</div>
            <div class="panel-body">
                <pre>
192.168. 10.  0 | Network
255.255.255.  0 | Netmask
192.168. 10.  2 | Gateway
192.168. 10.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 10.200 | DHCP => .10.250
192.168. 10.254 |
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Santa Rosa EOC</div>
            <div class="panel-body">
                <pre>
192.168. 11.  0 | Network
255.255.255.  0 | Netmask
192.168. 11.  2 | Gateway
192.168. 11.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 11.200 | DHCP => .11.250
192.168. 11.254 |
                </pre>
            </div>
        </div>
    </div>
</div>