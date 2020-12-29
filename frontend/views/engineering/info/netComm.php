<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$_title = 'NetComm Details';
$this->title = Yii::$app->name . ' - ' . $_title;
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = $_title;

//$this->menu = $this->getSidebarMenu();
?>
<h1>NetComm VPN Network Details</h1>

<div class="row">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-light bg-primary">WYCT Transmitter</div>
            <div class="card-body mb-0">
                <pre class="mb-0">
192.168. 12.  0 | Network
255.255.255.  0 | Netmask
192.168. 12.  2 | Gateway
192.168. 13.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 12.200 | DHCP => .12.250
192.168. 12.254 |                           
                </pre>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-light bg-danger">WNRP Transmitter</div>
            <div class="card-body mb-0">
                <pre class="mb-0">
192.168. 13.  0 | Network
255.255.255.  0 | Netmask
192.168. 13.  1 | Gateway
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
        <div class="card shadow">
            <div class="card-header text-dark alert-warning">Escambia EOC</div>
            <div class="card-body mb-0">
                <pre class="mb-0">
192.168. 10.  0 | Network
255.255.255.  0 | Netmask
192.168. 10.  1 | Gateway
192.168. 10.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 10.200 | DHCP => .10.250
192.168. 10.254 |
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-dark alert-danger">Santa Rosa EOC</div>
            <div class="card-body mb-0">
                <pre class="mb-0">
192.168. 11.  0 | Network
255.255.255.  0 | Netmask
192.168. 11.  1 | Gateway
192.168. 11.  1 | Primary Domain Name Server
----------------+----------------------------
192.168. 11.200 | DHCP => .11.250
192.168. 11.254 |
                </pre>
            </div>
        </div>
    </div>
</div>