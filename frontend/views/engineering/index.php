<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' - Engineering';
$this->params['breadcrumbs'][] = 'Engineering';
?>
<h2 class="gradBackground">Engineering Information</h2>

<div class="container-fluid">
    <div class="row equal-panels">
        <div class="col-md-3">
            <div class="panel panel-adxc">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-duplicate"></span>&nbsp;Documents</h4>
                </div>
                <div class="panel-body">
                    Provides access to various useful documents, like forms and 
                    Standard Operating Procedures (SOP)
                </div>
                <div class="panel-footer">
                    <?= Html::a('View &raquo;', ['/engineering/documents'], ['class' => 'btn btn-block btn-info']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-adxc">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-modal-window"></span>&nbsp;ADX Networks</h4>
                </div>
                <div class="panel-body">
                    A listing of the ADX's main networking Internet Protocol (IP) 
                    address segments.
                </div>
                <div class="panel-footer">
                    <?= Html::a('View &raquo;', ['/engineering/local-network'], ['class' => 'btn btn-block btn-info']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-adxc">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;Programming</h4>
                </div>
                <div class="panel-body">
                    A listing of Contacts for the various syndicated programming 
                    aired on ADX stations.
                </div>
                <div class="panel-footer">
                    <?= Html::a('View &raquo;', ['/engineering/programming'], ['class' => 'btn btn-block btn-info']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-adxc">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-cog"></span>&nbsp;Support Contacts</h4>
                </div>
                <div class="panel-body">
                    A listing of various support contacts for equipment, software, 
                    etc used by ADX Communications.
                </div>
                <div class="panel-footer">
                    <?= Html::a('View &raquo;', ['/engineering/support'], ['class' => 'btn btn-block btn-info']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-signal"></span> PHP Info</h4>
                </div>
                <div class="panel-body text-center">
                    Display the Web Server&#039;s Scripting &amp; Environmental information.
                </div>
                <div class="panel-footer">
                    <?= Html::a('View &raquo;', ['/engineering/info', 'view' => 'php_info'], ['class' => 'btn btn-block btn-danger']) ?>
                </div>
            </div>
        </div>
    </div>
</div>