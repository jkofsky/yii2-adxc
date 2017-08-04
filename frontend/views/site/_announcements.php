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
                if ($birthdayModel) {
                    foreach ($birthdayModel as $item) {
                        $items[] = Html::tag('li', "Happy Birthday: {$item->first_name} ({date($item->birth_date,'F jS')})", ['class' => 'birth_day']);
                    }
                }

                if (empty($announceModel)) {
                    $items[] = Html::tag('li', 'Nothing to announce.');
                } else {
                    foreach ($announceModel as $item) {
                        $items[] = Html::tag('li', $item->announcement . ' (' . $item->postedBy->username . ')', ['class' => 'post']);
                    }
                }
                echo HTML::ul($items,['encode'=>false]);
                ?>


            </div>
        </div>
    </div>
</div>
