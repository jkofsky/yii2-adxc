<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = 'Public IP Addresses';

//$this->menu = $this->getSidebarMenu();
?>
<h1>External Public IP Assignments</h1>

<p>Last Updated: <?= date('d-M-Y h:ia T', filemtime(__FILE__)); ?></p>

<section class="card-columns mb-0">
    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('AT&T Fiber in TOC (AudioNet)'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #:
            </address>
            <hr>
            <pre>
255.255.255.240 | Netmask
 12. 41.153.193 | Gateway
------------------------------------
 12.127. 16. 67 | Primary DSN
                | Secondary DNS
====================================
 12. 41.153.193 | Cisco Eth 0/0
 12. 41.153.194 | pfSense Firewall
 12. 41.153.195 | Opal 1 (WYCT)
 12. 41.153.196 | Opal 2 (WNRP)
 12. 41.153.197 | Opal 3 (WEBY/ESPN)
 12. 41.153.198 | <i>Opal 4 (Studio 3)</i>
 12. 41.153.199 | BricLink 1 - UWF
 12. 41.153.200 | <i>BricLink 2 - Spare ?</i>
 12. 41.153.201 | Comrex Access TOC #1 (WYCT)
 12. 41.153.202 | Comrex Access TOC #2 (WNRP)
 12. 41.153.203 | Comrex Access TOC #3 (WEBY/ESPN)
 12. 41.153.204 | Comrex Access Studio 5
 12. 41.153.205 | Internet Streaming
 12. 41.153.206 | Webrack/Podcast
            </pre>
            <i>future assignments</i>
            <hr>
            <b>DNS Records</b>
            <pre>
opal1.adxc.com   => 12. 41.153.195
opal2.adxc.com   => 12. 41.153.196
opal3.adxc.com   => 12. 41.153.197
<i>opal4.adxc.com   => 12. 41.153.198</i>
<i>bric1.adxc.com   => 12. 41.153.199</i>
<i>bric2.adxc.com   => 12. 41.153.200</i>
<i>crex1.adxc.com   => 12. 41.153.201</i>
<i>crex2.adxc.com   => 12. 41.153.202</i>
<i>crex3.adxc.com   => 12. 41.153.203</i>
<i>studio5.adxc.com => 12. 41.153.204</i>
-------------    => 12. 41.153.205
tech.adxc.com    => 12. 41.153.206
            </pre>
            <i>future assignments</i>
        </div>
    </div>

    <div class="card shadow border-danger">
        <div class="card-header alert-danger"><?= Html::encode('Cox Fiber in TOC (OfficeNet)'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 135-0121533-01
            </address>
            <hr>
            <pre>
255.255.255.252 | Netmask
174. 79. 13. 81 | Gateway
------------------------------------
 68.105. 28. 16 | Primary DSN
 68.105. 29. 16 | Secondary DSN
====================================
174. 79. 13. 82 | pfSense Firewall
            </pre>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Jordan Street via AT&T'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 155 509 584
            </address>
            <hr>
            <pre>
255.255.255.248 | Netmask
104. 10.109. 70 | Gateway
------------------------------------
 68. 94.156.  1 | Primary DNS
 68. 94.157.  1 | Secondary DNS
====================================
104. 10.109. 65 | AT&T modem
104. 10.109. 66 | LinkSys Router
104. 10.109. 67 | 
104. 10.109. 68 |
104. 10.109. 69 |
            </pre>
        </div>
    </div>

    <div class="card shadow border-danger">
        <div class="card-header alert-danger"><?= Html::encode('Jordan Street via COX'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 001 1302 0201 65402<br>
                Modem S/N:
            </address>
            <hr>
            <pre>
255.255.255.224 | Netmask
 98.191.245.225 | Gateway
------------------------------------
 68.105. 28. 16 | Primary DNS
 68.105. 29. 16 | Secondary DNS
====================================
 98.191.245.229 | LinkSys Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Palafox Street via AT&T'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #:
            </address>
            <hr>
            <pre>
255.255.255.### | Netmask
 68.222.233.13# | Gateway
------------------------------------
                | Primary DNS
                | Secondary DNS
====================================
 68.222.233.13# | Netopia Router
 68.222.233.133 | NextGen WNRP-STL
 68.222.233.134 | Omnia One
 68.222.233.13# |
 68.222.233.13# |
 68.222.233.13# |
            </pre>
        </div>
    </div>

    <div class="card shadow border-danger">
        <div class="card-header alert-danger"><?= Html::encode('Palafox Street via COX'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: <br>
                Modem S/N:
            </address>
            <hr>
            <pre>
255.255.255.224 | Netmask
 72.216.237.  1 | Gateway
------------------------------------
                | Primary DNS
                | Secondary DNS
====================================
 72.216.237.  3 | LinkSys Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Printers Alley via AT&T'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #:
            </address>
            <hr>
            <pre>
255.255.255.248 | Netmask
 66. 72.220.206 | Gateway
------------------------------------
 66. 72.220.206 | Primary DNS
                | Secondary DNS
====================================
 66. 72.220.201 | 
 66. 72.220.202 | RingPro-55 (??)
 66. 72.220.203 | ChimePro-ea (??)
 66. 72.220.204 |
 66. 72.220.205 | WNRP/WEBY APT
 66. 72.220.206 | AT&T Modem/Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-warning">
        <div class="card-header alert-warning"><?= Html::encode('Printers Alley via Mediacom'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: <br>
                weby.dynip.com => DHCP Address
            </address>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header alert-dark"><?= Html::encode('Printers Alley via Sprint'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 850-228-2275<br>
                <i>weby.dynip.com => 24.221.5.200</i>
            </address>
            <hr>
            <pre>
255.255.255.240 | Netmask
 24.221.  5.201 | Gateway
------------------------------------
 68. 28. 31. 30 | Primary DNS
 68. 28. 31. 31 | Secondary DNS
====================================
 24.221.  5.200 | Cradlepoint Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('25Kw via AT&T'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                AT&T Phone # 850-623-0347<br>
                Account #:
            </address>
            <hr>
            <pre>
255.255.255.??? | Netmask
                | Gateway
------------------------------------
                | Primary DNS
                | Secondary DNS
====================================
 68.222.221.206	| AT&T Modem/Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header alert-dark"><?= Html::encode('25Kw via Sprint'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 850-228-2275<br>
            </address>
            <hr>
            <pre>
255.255.255.240 | Netmask
 24.221.  5.??? | Gateway
------------------------------------
 68. 28. 31. 30 | Primary DNS
 68. 28. 31. 31 | Secondary DNS
====================================
 24.221.  5.??? | Cradlepoint Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-warning">
        <div class="card-header alert-warning"><?= Html::encode('WYCT-TX via NetComm'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                wyct.adxc.com => 198.251.97.97
            </address>
        </div>
    </div>

    <div class="card shadow border-warning">
        <div class="card-header alert-warning"><?= Html::encode('WYCT-TX via HughesNet'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: <br>
                Modem S/N:
            </address>
            <hr>
            <pre>
255.255.255.??? | Netmask
                | Gateway
------------------------------------
                | Primary DNS
                | Secondary DNS
====================================
 72.170.241.252 | Modem
            </pre>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header alert-dark"><?= Html::encode('WYCT-TX via Sprint1'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 850-###-####<br>
                <b>Netcom Backup/Phones</b>
            </address>
            <hr>
            <pre>
255.255.255.### | Netmask
 24.221. 24.### | Gateway
------------------------------------
 68. 28. 31. 30 | Primary DNS
 68. 28. 31. 31 | Secondary DNS
====================================
 24.221. 24. 38 | Cradlepoint Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header alert-dark"><?= Html::encode('WYCT-TX via Sprint2'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 850-791-3138<br>
                <b>WYCT APT</b>
            </address>
            <hr>
            <pre>
255.255.255.252 | Netmask
 24.221. 24. 37 | Gateway
------------------------------------
 68. 28. 31. 30 | Primary DNS
 68. 28. 31. 31 | Secondary DNS
====================================
 24.221. 24. 43 | Cradlepoint Router
            </pre>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header alert-dark"><?= Html::encode('WYCT-TX via Sprint3'); ?></div>
        <div class="card-body">
            <address>
                <b>Information:</b><br>
                Account #: 850-316-0655<br>
                <b>Playlist APT</b>
            </address>
            <hr>
            <pre>
255.255.255.248 | Netmask
 24.221. 24. 45 | Gateway
------------------------------------
 68. 28. 31. 30 | Primary DNS
 68. 28. 31. 31 | Secondary DNS
====================================
 24.221. 24. 44 | Cradlepoint Router
            </pre>
        </div>
    </div>

</section>
