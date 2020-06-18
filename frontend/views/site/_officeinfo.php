<?php
/* Partial view for Announcements Panel */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\bootstrap4\Html;
?>

    <div class="card-body pb-0">
        <address>
            <b>ADX Communications of Escambia, LLC</b><br />
            7251 Plantation Road<br />
            Pensacola, Florida 32504
        </address>
        <ul class="list-unstyled">
            <li><hr></li>
            <li>Voice: (850) 494-2800</li>
            <li>FAX: (850) 494-0778</li>
            <li>Local Sales Office: (850) 262-6000</li>
            <li>National Sales Office: (850) 262-6101</li>
        </ul>
        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="card-footer p-1">
                <?= Html::a('Company Phone List &raquo;', ['/site/phone-list'], ['class' => 'btn btn-block btn-info']) ?>
            </div>
        <?php endif; ?>
    </div>
