<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' - PHP Info';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'PHP Server Info';
?>
<style type="text/css">
    body, td, th, h1, h2 {font-family: sans-serif;}
    pre {margin: 0px; font-family: monospace;}
    table {border-collapse: collapse; width: 100%}
    .center {text-align: center;}
    .center table {margin-left: auto; margin-right: auto; text-align: left;}
    .center th {text-align: center !important; }
    td, th {border: 1px solid #000000; vertical-align: baseline;}
    .p  {text-align: left;}
    .e  {background-color: #ccccff; font-weight: bold; color: #000000;}
    .h  {background-color: #9999cc; font-weight: bold; color: #000000;}
    .v  {background-color: #cccccc; color: #000000;}
    .vr {background-color: #cccccc; text-align: right; color: #000000;}
    img {float: right; border: 0px;}
    hr  {width: 600px; margin: 0 auto; background-color: #cccccc; border: 0px;
         height: 1px; color: #000000;}
    #phpinfo{width: 90%; margin: 0 auto;}
</style>

<div id="phpinfo">
    <?php
    ob_start();
    phpinfo();
    $pinfo = ob_get_contents();
    ob_end_clean();

    // the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml
    // valide, so replace it with "module_Zend_Optimizer"
    echo ( str_replace("module_Zend Optimizer", "module_Zend_Optimizer", preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo))
    );
    ?>
</div><!-- phpinfo -->