<?php

use yii\bootstrap4\Html;
?>
<div class="media">
    <div class="media-left text-center alert-info  mr-3"><?= date('M d, Y', strtotime($node['airdate'])); ?></div>
    <div class="media-body">
        <div class="media-heading">
            <b><?=
                Html::a($node['title'], $node['link'], [
                    'target' => '_new'
                ]);
                ?></b>
            <hr style="margin: 2px;">
            <i><span class="small">Hosted by: <?= $node['host']; ?></span></i>
        </div>
        <?= $node['description']; ?>
        <audio controls preload="metadata" style="height: 2.5em; width: 100%;">
            <source src="<?= $node['fileName']; ?>" type="<?= $node['fileType']; ?>">
            Your Browser can play this audio file.
        </audio>
    </div>
</div>
