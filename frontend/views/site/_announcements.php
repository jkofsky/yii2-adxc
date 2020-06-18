<?php
/* Partial view for Announcements Panel */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;
?>

<div class="card-body pb-0">
    <?php
    if (!empty($birthdayModel)) {
        foreach ($birthdayModel as $item) {
            $items[] = Html::tag('li', "Happy Birthday: {$item->first_name} ({date($item->birth_date,'F jS')})", ['class' => 'birth_day']);
        }
    }

    if (empty($announceModel)) {
        $items[] = Html::tag('li', Yii::t('app', 'There are currently no announcments to be made.'));
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

