<?php
/* @var $this yii\web\View */
?>
<h1>raspberry/index</h1>

<p>
    <?= $directory = Yii::getAlias('@webroot/piImages'); ?>
    <?php $_imageList = array_diff(scandir($directory), array('..', '.'));
    echo var_dump($_imageList);
    ?>
</p>
