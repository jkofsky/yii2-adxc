<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'ADTRAN Routing';

//$this->menu = $this->getSidebarMenu();
?>
<h1>ADTRAN 550 Number Routing</h1>

<p>Current as of: <?= date('d-M-Y h:ia T', filemtime(__FILE__)); ?></p>

<table class="table table-striped table-sm">
    <thead>
        <tr><th>Number</th><th>Use</th><th>Type</th><th>Port</th></tr>
    </thead>
    <tbody>
        <tr><td>262-6060</td><td>WNRP Hunt Group Lines</td>     <td>BRI</td>    <td>BRI 1/1&amp;2</td></tr>
        <tr><td>262-6061</td><td>WYCT Hunt Group Lines</td>     <td>BRI</td>    <td>BRI 1/3&amp;4</td></tr>
        <tr><td>262-6062</td><td>WEBY Hunt Group Lines</td>     <td>BRI</td>    <td>BRI 2/1&amp;2</td></tr>
        <tr><td>262-6063</td><td><i>Future ISDN/BRI Lines</i></td><td>BRI</td>  <td>BRI 2/3&amp;4</td></tr>
        <tr><td>262-6064</td><td>Studio 3 Hunt Group Lines</td> <td>Analog</td> <td>FXS 4/5-8</td></tr>
        <tr><td>262-6077</td><td>Freedom Friday Text Line</td>  <td>Analog</td> <td>???</td></tr>
        <tr><td>262-6080</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/1</td></tr>
        <tr><td>262-6081</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/2</td></tr>
        <tr><td>262-6082</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/3</td></tr>
        <tr><td>262-6083</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/4</td></tr>
        <tr><td>262-6084</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/5</td></tr>
        <tr><td>262-6085</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/6</td></tr>
        <tr><td>262-6086</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/7</td></tr>
        <tr><td>262-6087</td><td>Unknown</td>                   <td>Analog</td> <td>FXS 3/8</td></tr>
        <tr><td>262-6088</td><td>WNRP VIP Call-In Line</td>     <td>Analog</td> <td>FXS 4/1</td></tr>
        <tr><td>262-6089</td><td>WYCT VIP Call-In Line</td>     <td>Analog</td> <td>FXS 4/2</td></tr>
        <tr><td>262-6090</td><td>WEBY VIP Call-In Line</td>     <td>Analog</td> <td>FXS 4/3</td></tr>
        <tr><td>262-6091</td><td>Studio 3 VIP Call-In Line</td> <td>Analog</td> <td>FXS 4/4</td></tr>
        <tr><td>6100-6199</td><td>Office ESI PBX</td>           <td>PBX</td>  <td>n/a</tr>
    </tbody>
</table>