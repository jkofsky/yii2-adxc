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
            <div class="panel-heading"><?= Html::encode('AT&T Fiber (AudioNet)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
                </address>
                <pre>
255.255.255.240 | Netmask
 12. 41.153.193 | Gateway
------------------------------------
 12. 41.153.193 | Cisco Eth 0/0
 12. 41.153.194 | SonicWall (Audio)
 12. 41.153.195 |
 12. 41.153.196 |
 12. 41.153.197 |
 12. 41.153.198 |
 12. 41.153.199 |
 12. 41.153.200 | NextGen WNRP-STL
 12. 41.153.201 | <i>NextGen WYCT-STL</i>
 12. 41.153.202 | <i>Audio Stream-WNRP</i>
 12. 41.153.203 | Audio Stream-WYCT
 12. 41.153.204 | Remote Comrex-WNRP
 12. 41.153.205 | <i>Remote Comrex-WYCT</i>
 12. 41.153.206 | Webrack/Podcast
                </pre>
                <i>future assignments</i>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('Cox in TOC (OFFICENET)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
                    Modem s/n: 214665571
                </address>
                <pre>
255.255.255.192 | Netmask
 72.204.216.193 | Gateway
---------------------------------
 72.204.216.221 | Sonicwall
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('Cox for STL (Plantation)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
                    Modem s/n: 215482974
                </address>
                <pre>
255.255.255.192 | Netmask
 72.204.216.193 | Gateway
---------------------------------
 72.204.216.200 | NextGen WNRP-STL
                </pre>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('DSL for STL (Plantation)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
                </address>
                <pre>
255.255.255.192 | Netmask
 74.168.133. 50 | Gateway
---------------------------------
 74.168.133. 50 | Netopia Router
 74.168.133. 51 |
 74.168.133. 52 |
 74.168.133. 53 | Bric - 92.3 STL
 74.168.133. 54 | NextGen WNRP-STL
                </pre>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><?= Html::encode('Cox for STL (Palafox)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
                    Modem s/n:
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
            <div class="panel-heading"><?= Html::encode('DSL for STL (Palafox)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
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
            <div class="panel-heading"><?= Html::encode('UVerse for STL (Jordan)'); ?></div>
            <div class="panel-body">
                <address>
                    <b>Contact Information</b><br />
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
    </div>
</section>
