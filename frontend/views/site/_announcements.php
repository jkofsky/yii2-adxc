<?php
/* Partial view for password strength requirements */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Announcements for <?= date('l, F jS'); ?></div>
            <div class="panel-body">
                <?php
                if (!empty($birthdayModel)) {
                    foreach ($birthdayModel as $item) {
                        $items[] = Html::tag('li', "Happy Birthday: {$item->first_name} ({date($item->birth_date,'F jS')})", ['class' => 'birth_day']);
                    }
                }

                if (empty($announceModel)) {
                    $items[] = Html::tag('li', Yii::t('app', 'There is currently no announcments to be made.'));
                } else {
                    foreach ($announceModel as $item) {
                        $items[] = Html::tag('li', $item->announcement . ' (' . $item->postedBy->username . ')', ['class' => 'post']);
                    }
                }
                echo HTML::ul($items, ['item' => function ($item, $index) {
                        return $item;
                    }], ['encode' => false]);
                ?>


            </div>
        </div>
    </div>
</div>
