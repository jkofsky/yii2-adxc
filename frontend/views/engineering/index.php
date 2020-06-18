<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = Yii::$app->name . ' - Engineering';
$this->params['breadcrumbs'][] = 'Engineering';
?>
<h2>Engineering Information</h2>
<?=
Html::img(
        '@web/images/ErrorBackground.jpg', [
    'style' => "height:191px; width:167px; float:right; border:0px;",
    'alt' => 'Warning',
    'title' => "Warning"
        ]
);
?>

<div class="row">
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="far fa-copy"></i> Documents</div>
            <div class="card-body text-center">
                Provides access to various useful documents, like forms and
                Standard Operating Procedures (SOP)
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/documents'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="fas fa-network-wired"></i> ADX Networks</div>
            <div class="card-body text-center">
                A listing of the ADX's main networking Internet Protocol (IP)
                address segments.
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/local-network'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="fas fa-satellite-dish"></i> Programming</div>
            <div class="card-body text-center">
                A listing of Contacts for the various syndicated programming
                aired on ADX stations.
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/programming'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="fas fa-cogs"></i> Support Contacts</div>
            <div class="card-body text-center">
                A listing of various support contacts for equipment, software,
                etc used by ADX Communications.
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/support'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="fas fa-blender-phone"></i>&nbsp;ADTRAN Numbers</div>
            <div class="card-body text-center">
                A listing of the 262-6### numbers being routed by the 
                ADTRAN&nbsp;550 PBX.
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/adtran'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <div class="card shadow">
            <div class="card-header text-light bg-adxc">
                <i class="fas fa-server"></i> Server Info</div>
            <div class="card-body text-center">
                Display the Web Server&#039;s Scripting &amp; Environmental information.
            </div>
            <div class="card-footer text-center">
                <?= Html::a('View &raquo;', ['/engineering/php-info'], ['class' => 'btn btn-block btn-danger']) ?>
            </div>
        </div>
    </div>
</div>
