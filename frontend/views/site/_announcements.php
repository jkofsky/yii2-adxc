<?php
/* Partial view for password strength requirements */
/* @var $announceModel common\models\Announcement */

use yii\helpers\Html;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Announcements for <?= date('l, F jS'); ?></div>
            <div class="panel-body">
                <?=
                Html::ul($announceModel, ['item' => function($item, $index) {
                        return Html::tag('li', $item->announcement . ' (' . $item->postedBy->username . ')', ['class' => 'post']
                        );
                    }]);
                        ?>
            </div>
        </div>
    </div>
</div>
