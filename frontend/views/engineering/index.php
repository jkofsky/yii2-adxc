<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::$app->name . ' - Engineering';
$this->params['breadcrumbs'][] = 'Engineering';
?>
<h2 class="gradBackground">Engineering Information</h2>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-duplicate"></span>&nbsp;Documents</h3>
                </div>
                <div class="panel-body">
                    <p>Provides access to various useful documents, like forms and 
                        Standard Operating Procedures (SOP)</p>
                    <p>
                        <?= Html::a('View &raquo;', ['/engineering/documents'], ['class' => 'btn btn-block btn-success']) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-modal-window"></span>&nbsp;ADX Networks</h3>
                </div>
                <div class="panel-body">
                    <p>A listing of the ADX's main networking Internet Protocol (IP) 
                        address segments.</p>
                    <p>
                        <?= Html::a('View &raquo;', ['/engineering/local-network'], ['class' => 'btn btn-block btn-success']) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;Programming</h3>
                </div>
                <div class="panel-body">
                    <p>A listing of Contacts for the various syndicated programming 
                        aired on ADX stations.</p>
                    <p>
                        <?= Html::a('View &raquo;', ['/engineering/programming'], ['class' => 'btn btn-block btn-success']) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;Support Contacts</h3>
                </div>
                <div class="panel-body">
                    <p>A listing of various support contacts for equipment, software, 
                        etc used by ADX Communications.</p>
                    <p>
                        <?= Html::a('View &raquo;', ['/engineering/support'], ['class' => 'btn btn-block btn-success']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading"><h3><span class="glyphicon glyphicon-info-sign"></span> PHP Info</h3></div>
                <div class="panel-body text-center">
                    Display the Web Server&#039;s Scripting &amp; Environmental information.
                </div>
                <div class="panel-footer text-center">
                    <?= Html::a('View &raquo;', ['/engineering/info', 'view' => 'php_info'], ['class' => 'btn btn-block btn-danger']) ?>
                </div>
            </div>
        </div>
    </div>
</div>