<?php
/* Partial view for Announcements Panel */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;
?>

<div class="panel panel-adxc">
    <div class="panel-heading">Business Office</div>
    <div class="panel-body text-center">
        <address>
            <b>ADX Communications of Escambia, LLC</b><br />
            7251 Plantation Road<br />
            Pensacola, Florida 32504
        </address>
        <?php
        $items = [
            '<li class="nav-divider"></li>',
            'Voice: (850) 494-2800',
            'FAX: (850) 494-0778',
            'Newsroom Tip-Line: (850) 262-6119',
            'Traffic Tip-Line: (850) 262-6111',
            'National Sales Office: (850) 262-6101',
        ];
        echo HTML::ul($items, [
            'encode' => false,
            'class' => 'nav',
        ]);
        ?>
    </div>
    <?php if (!Yii::$app->user->isGuest) : ?>
        <div class="panel-footer">
            <?= Html::a('Phone List &raquo;', ['/site/phone-list'], ['class' => 'btn btn-block btn-info']) ?>
        </div>
    <?php endif; ?>
</div>
