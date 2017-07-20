<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">
        <div class = "panel panel-danger">
            <div class="panel-heading text-center">
                <p style="font-size: large; font-weight: bolder;">IntraNet Site Administration Options <span class="glyphicon glyphicon-cog"></span></p>
            </div>
            <div class="panel-body">
                <?php
                $menuItems = [
                    ['label' => 'Announcements Maintenance Section &raquo', 'url' => ['announcement/index']],
                    ['label' => 'Departments Maintenance Section &raquo', 'url' => ['department/index']],
                    //['label' => 'Documents (Forms) Maintenance Section &raquo', 'url' => ['user/index']],
                    ['label' => 'Employees (Users) Maintenance Section &raquo', 'url' => ['document/index']],
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
