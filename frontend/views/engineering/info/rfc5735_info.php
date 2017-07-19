<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' -  RFC 1918/5735 Info';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = 'RFC 1918/5735 Info';

//$this->menu = $this->getSidebarMenu();
?>
<h1>IANA IPv4 Address Usage</h1>

<div class="row-1">
    <p>The <a rel="nofollow" href="http://en.wikipedia.org/wiki/Internet_Engineering_Task_Force" title="Internet Engineering Task Force" target="_blank">
            Internet Engineering Task Force</a> (IETF) has directed the
        <a rel="nofollow" href="http://en.wikipedia.org/wiki/Internet_Assigned_Numbers_Authority" title="Internet Assigned Numbers Authority" target="_blank">
            Internet Assigned Numbers Authority</a> (IANA) to reserve the
        following IPv4 address ranges for private networks, as published
        in <a rel="nofollow" href="http://tools.ietf.org/html/rfc1918" target="_blank">RFC 1918</a>:</p>
    <table class="table table-bordered table-striped">
        <thead><tr>
                <th>RFC1918 name</th>
                <th>IP address range</th>
                <th>Block size</th>
                <th><i><a rel="nofollow" href="http://en.wikipedia.org/wiki/Classful_network" title="Classful network" target="_blank">Classful</a></i> description</th>
                <th>Largest <a rel="nofollow" href="http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing" title="Classless Inter-Domain Routing" target="_blank">CIDR</a> block<br />(subnet mask)</th>
                <th>Host ID size</th>
                <th>Mask bits</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>24-bit block</td>
                <td>10.0.0.0 -<br />10.255.255.255</td>
                <td class="text-right">16,777,216</td>
                <td>single <a rel="nofollow" href="http://en.wikipedia.org/wiki/Class_A_network" title="Class A network" target="_blank">class A network</a></td>
                <td>10.0.0.0/8<br />(255.0.0.0)</td>
                <td>24 bits</td>
                <td>8 bits</td>
            </tr>
            <tr>
                <td>20-bit block</td>
                <td>172.16.0.0 -<br />172.31.255.255</td>
                <td class="text-right">1,048,576</td>
                <td>16 contiguous class B networks</td>
                <td>172.16.0.0/12<br />(255.240.0.0)</td>
                <td>20 bits</td>
                <td>12 bits</td>
            </tr>
            <tr>
                <td>16-bit block</td>
                <td>192.168.0.0 -<br />192.168.255.255</td>
                <td class="text-right">65,536</td>
                <td>256 contiguous class C networks</td>
                <td>192.168.0.0/16<br />(255.255.0.0)</td>
                <td>16 bits</td>
                <td>16 bits</td>
            </tr>
        </tbody>
    </table>


    <table class="table table-bordered table-striped" style="font-family: monospace">
        <thead>
            <tr>
                <th class="text-left"><a rel="nofollow" href="http://tools.ietf.org/html/rfc5735" title="RFC5735" target="_blank">RFC 5735</a></th>
                <th class="text-center">Special Use IPv4 Addresses</th>
                <th class="text-right">January 2010</th>
            </tr>
            <tr>
                <th class="text-left" colspan="3">
                    <span style="font-size: 1.75rem">4.  Summary Table</span>
                </th>
            </tr>
            <tr>
                <th>Address Block</th>
                <th>Present Use</th>
                <th>Reference</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0.0.0.0/8</td>
                <td>"This" Network</td>
                <td><a href="http://tools.ietf.org/html/rfc1122#section-3.2.1.3">RFC 1122, Section&nbsp;3.2.1.3</a></td>
            </tr>
            <tr style="font-size: larger">
                <td><b>10.0.0.0/8</b></td>
                <td><b>Private-Use Networks</b></td>
                <td><b><a href="http://tools.ietf.org/html/rfc1918">RFC 1918</a></b></td>
            </tr>
            <tr>
                <td>127.0.0.0/8</td>
                <td>Loopback</td>
                <td><a href="http://tools.ietf.org/html/rfc1122#section-3.2.1.3">RFC 1122, Section&nbsp;3.2.1.3</a></td>
            </tr>
            <tr>
                <td>169.254.0.0/16</td>
                <td>Link Local</td>
                <td><a href="http://tools.ietf.org/html/rfc3927">RFC 3927</a></td>
            </tr>
            <tr style="font-size: larger">
                <td><b>172.16.0.0/12</b></td>
                <td><b>Private-Use Networks</b></td>
                <td><b><a href="http://tools.ietf.org/html/rfc1918">RFC 1918</a></b></td>
            </tr>
            <tr>
                <td>192.0.0.0/24</td>
                <td>IETF Protocol Assignments</td>
                <td><a href="http://tools.ietf.org/html/rfc5736">RFC 5736</a></td>
            </tr>
            <tr>
                <td>192.0.2.0/24</td>
                <td>TEST-NET-1</td>
                <td><a href="http://tools.ietf.org/html/rfc5737">RFC 5737</a></td>
            </tr>
            <tr>
                <td>192.88.99.0/24</td>
                <td>6to4 Relay Anycast</td>
                <td><a href="http://tools.ietf.org/html/rfc3068">RFC 3068</a></td>
            </tr>
            <tr style="font-size: larger">
                <td><b>192.168.0.0/16</b></td>
                <td><b>Private-Use Networks</b></td>
                <td><b><a href="http://tools.ietf.org/html/rfc1918">RFC 1918</a></b></td>
            </tr>
            <tr>
                <td>198.18.0.0/15</td>
                <td>Network Interconnect Device Benchmark Testing</td>
                <td><a href="http://tools.ietf.org/html/rfc2544">RFC 2544</a></td>
            </tr>
            <tr>
                <td>198.51.100.0/24</td>
                <td>TEST-NET-2</td>
                <td><a href="http://tools.ietf.org/html/rfc5737">RFC 5737</a></td>
            </tr>
            <tr>
                <td>203.0.113.0/24</td>
                <td>TEST-NET-3</td>
                <td><a href="http://tools.ietf.org/html/rfc5737">RFC 5737</a></td>
            </tr>
            <tr>
                <td>224.0.0.0/4</td>
                <td>Multicast</td>
                <td><a href="http://tools.ietf.org/html/rfc3171">RFC 3171</a></td>
            </tr>
            <tr>
                <td>240.0.0.0/4</td>
                <td>Reserved for Future Use</td>
                <td><a href="http://tools.ietf.org/html/rfc1112#section-4">RFC 1112, Section&nbsp;4</a></td>
            </tr>
            <tr>
                <td>255.255.255.255/32</td>
                <td>Limited Broadcast</td>
                <td><a href="http://tools.ietf.org/html/rfc919#section-7">RFC 919, Section&nbsp;7</a><br />
                    <a href="http://tools.ietf.org/html/rfc922#section-7">RFC 922, Section&nbsp;7</a></td>
            </tr>
        </tbody>
    </table>

</div>