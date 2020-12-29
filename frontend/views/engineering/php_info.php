<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$_title = 'PHP Info';
$this->title = Yii::$app->name . ' - ' . $_title;
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = $_title;

//$this->menu = $this->getSidebarMenu();
?>

<style type="text/css">
    /*body {background-color: #fff; color: #222; font-family: sans-serif;}*/
    pre {margin: 0; font-family: monospace;}
    table {border-collapse: collapse; border: 0; width: 100%; box-shadow: 1px 2px 3px #ccc;}
    .center {text-align: center;}
    .center table {margin: 1em auto; text-align: left;}
    .center th {text-align: center !important;}
    td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
    th {position: sticky; top: 0; background: inherit;}
    .p {text-align: left;}
    .e {background-color: #ccf; width: 300px; font-weight: bold;}
    .h {background-color: #99c; font-weight: bold;}
    .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
    .v i {color: #999;}
    img {float: right; border: 0;}
    hr {background-color: #ccc; border: 0; height: 1px;}
</style>

<div id="phpinfo">
    <?php
    ob_start();
    phpinfo(INFO_ALL);
    $pinfo = ob_get_contents();
    ob_end_clean();

    // the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml
    // valide, so replace it with "module_Zend_Optimizer"
    echo ( str_replace("module_Zend Optimizer", "module_Zend_Optimizer", preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo))
    );
    ?>
</div><!-- phpinfo -->