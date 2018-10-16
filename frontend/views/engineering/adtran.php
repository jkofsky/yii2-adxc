<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = ['label' => 'ADX Networks', 'url' => ['engineering/local-network']];
$this->params['breadcrumbs'][] = 'ADTRAN Routing';

//$this->menu = $this->getSidebarMenu();
?>
<h1>ADTRAN 550 Number Routing</h1>

<table class="table-condensed table-striped table-responsive">
    <thead>
        <tr><th>Number</th><th>Use</th><th>Type</th>
    </thead>
    <tbody>
        <tr><td>262-6060</td><td>WNRP Hunt Group Lines</td>     <td>BRI</td></tr>
        <tr><td>262-6061</td><td>WYCT Hunt Group Lines</td>     <td>BRI</td></tr>
        <tr><td>262-6062</td><td>WEBY Hunt Group Lines</td>     <td>BRI</td></tr>
        <tr><td>262-6063</td><td><i>Future ISDN/BRI Lines</i></td><td>BRI</td></tr>
        <tr><td>262-6064</td><td>ESPN Hunt Group Lines</td>     <td>Analog</td></tr>
        <tr><td>262-6080</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6081</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6082</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6083</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6084</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6085</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6086</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6087</td><td>Unknown</td>                   <td>Analog</td></tr>
        <tr><td>262-6088</td><td>WNRP Guest Call-In Line</td>   <td>Analog</td></tr>
        <tr><td>262-6088</td><td>WNRP Guest Call-In Line</td>   <td>Analog</td></tr>
        <tr><td>262-6089</td><td>WYCT Guest Call-In Line</td>   <td>Analog</td></tr>
        <tr><td>262-6090</td><td>WEBY Guest Call-In Line</td>   <td>Analog</td></tr>
        <tr><td>262-6091</td><td>ESPN Guest Call-In Line</td>   <td>Analog</td></tr>
        <tr><td>6100-6199</td><td>Office ESI PBX</td>           <td>mixed</td></tr>
    </tbody>
</table>