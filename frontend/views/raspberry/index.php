<?php
/* @var $this yii\web\View */

static $_imageNumber = 5;
static $_imageIdx = 0;

$directory = Yii::getAlias('@webroot/piImages');

//$_imageList = array_diff(scandir($directory), array('..', '.'));

$_imageList =  array_slice(scandir($directory), 2);
$imgFile ="";

if (($_imageIdx % $_imageNumber) > 0) {
    $imgFile = 'piImages/' . $_imageList[$_imageIdx++];

    if ($_imageIdx >= count($_imageList)) {
        $_imageIdx = 0;
    }
}
?>
<h1>raspberry/index</h1>

<p>
    <?= $directory = Yii::getAlias('@webroot/piImages'); ?><br>
    <?= var_dump($_imageList); ?><br>
    <?= $imgFile ?>
</p>
