<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Nav;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">
        <div class = "card shadow">
            <div class="card-header text-center alert-danger">
                <p style="font-size: large; font-weight: bolder;">IntraNet Site Administration Options <span class="glyphicon glyphicon-cog"></span></p>
            </div>
            <div class="card-body">
                <?php
                $menuItems = [
                    ['label' => 'Announcements Maintenance Section &raquo', 'url' => ['announcement/index']],
                    ['label' => 'Departments Maintenance Section &raquo', 'url' => ['department/index']],
                    //['label' => 'Documents (Forms) Maintenance Section &raquo', 'url' => ['document/index']],
                    ['label' => 'Users (Employees) Maintenance Section &raquo', 'url' => ['user/index']],
                    ['label' => 'Subnet Maintenance Section &raquo', 'url' => ['subnet/index']],
                    ['label' => 'Static IP Maintenance Section &raquo', 'url' => ['ip-assignment/index']],
                ];
                ?>

                <?=
                Nav::widget([
                    'encodeLabels' => false,
                    'options' => ['class' => 'nav'],
                    'items' => $menuItems,
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
