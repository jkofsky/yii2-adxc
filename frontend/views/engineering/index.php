<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' - Engineering';
$this->params['breadcrumbs'][] = 'Engineering';
?>
<h2 class="gradBackground">Engineering Information</h2>
<div class="container-fluid">
    <div class="col-md-2">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">Documents</div>
            <div class="panel-body text-center">
                Provides access to various useful documents, like forms and 
                Standard Operating Procedures (SOP)
            </div>
            <div class="panel-footer text-center">
                <?= Html::a('View', ['/engineering/documents'], ['class' => 'btn btn-block btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">ADX Networks</div>
            <div class="panel-body text-center">
                A listing of the ADX's main networking Internet Protocol (IP) 
                address segments.
            </div>
            <div class="panel-footer text-center">
                <?= Html::a('View', ['/engineering/local-network'], ['class' => 'btn btn-block btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">Programming</div>
            <div class="panel-body text-center">
                A listing of Contacts for the various syndicated programming 
                aired on ADX stations.
            </div>
            <div class="panel-footer text-center">
                <?= Html::a('View', ['/engineering/programming'], ['class' => 'btn btn-block btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">Support Contacts</div>
            <div class="panel-body text-center">
                A listing of various support contacts for equipment, software, 
                etc used by ADX Communications.
            </div>
            <div class="panel-footer text-center">
                <?= Html::a('View', ['/engineering/support'], ['class' => 'btn btn-block btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">PHP Info</div>
            <div class="panel-body text-center">
                Display the Web Server&#039;s Environmental &amp; Scripting information.
            </div>
            <div class="panel-footer text-center">
                <?= Html::a('View', ['/engineering/info', 'view' => 'php_info'], ['class' => 'btn btn-block btn-danger']) ?>
            </div>
        </div>
    </div>
</div>
