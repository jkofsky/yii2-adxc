<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = 'Public IP Addresses';

//$this->menu = $this->getSidebarMenu();
?>
<h1>External Public IP Assignments</h1>
<section class="row">
    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('AT&T In TOC (AudioNet)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b><u>Fiber</u>
                </address>
                <pre>
255.255.255.240 | Netmask
 12. 41.153.193 | Gateway
------------------------------------
 12. 41.153.193 | Cisco Eth 0/0
 12. 41.153.194 | SonicWall (Audio)
                | <i>(pfSense)</i>
 12. 41.153.195 | opal1.adxc.com (WYCT)
 12. 41.153.196 | opal2.adxc.com (WNRP)
 12. 41.153.197 | opal3.adxc.com (WEBY/ESPN)
 12. 41.153.198 | opal4.adxc.com (Studio 3)
 12. 41.153.199 | BricLink II
 12. 41.153.200 | BricLink II
 12. 41.153.201 | Comrex Access TOC #1 (WYCT)
 12. 41.153.202 | Comrex Access TOC #2 (WNRP)
 12. 41.153.203 | Comrex Access TOC #3 (WEBY/ESPN)
 12. 41.153.204 | Comrex Access Studio 5
 12. 41.153.205 | Internet Streaming
 12. 41.153.206 | Webrack/Podcast
                </pre>
                <i>future assignments</i>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('Cox in TOC (OfficeNet)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b><u>Fiber</u>
                </address>
                <pre>
255.255.255.252 | Netmask
174. 79. 13. 81 | Gateway
------------------------------------
 68.105. 28. 16 | Primary DSN
 68.105. 29. 16 | Secondary DSN
---------------------------------
174. 79. 13. 82 | pfSense Firewall
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('Cox for STL (Palafox)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b>
                </address>
                <pre>
255.255.255.224 | Netmask
 72.216.237.  1 | Gateway
---------------------------------
 72.216.237.  3 | LynkSys Router
                </pre>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('COX for STL (Jordan Street)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b>
                </address>
                <pre>
255.255.255.224 | Netmask
 98.191.245.225 | Gateway
---------------------------------
 68.105. 28. 16 | Primary DNS
 68.105. 29. 16 | Secondary DNS
=================================
 98.191.245.229 | LinkSys Router
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('DSL for STL (Palafox)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b>
                </address>
                <pre>
255.255.255.### | Netmask
 68.222.233.13# | Gateway
---------------------------------
 68.222.233.13# | Netopia Router
 68.222.233.133 | NextGen WNRP-STL
 68.222.233.134 | Omnia One
 68.222.233.13# |
 68.222.233.13# |
 68.222.233.13# |
                </pre>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('UVerse for STL (Jordan Street)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b>
                </address>
                <pre>
255.255.255.248 | Netmask
104. 10.109. 70 | Gateway
---------------------------------
104. 10.109. 65 | 
104. 10.109. 66 | LinkSys Router
104. 10.109. 67 | 
104. 10.109. 68 |
104. 10.109. 69 |
                </pre>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode("AT&T for STL (Printers Alley)"); ?></div>
            <div class="panel-body">
                <address>
                    <b>Modem s/n: </b>
                </address>
                <pre>
255.255.255.248 | Netmask
 66. 72.220.206 | Gateway
---------------------------------
 66. 72.220.201 | Router ?
 66. 72.220.202 |
 66. 72.220.203 |
 66. 72.220.204 |
 66. 72.220.205 | NextGen WEBY-STL
                </pre>
            </div>
        </div>
    </div>
</section>
