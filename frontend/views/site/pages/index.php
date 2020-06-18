<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Nav;

$this->title = Yii::$app->name . ' - Useful Info';
$this->params['breadcrumbs'][] = 'Useful Reading';
?>

<h1><?= Html::encode('Just Some Useful Information'); ?></h1>
<ul class="list-unstyled row">
    <?php
    foreach (scandir(dirname(__FILE__)) as $value) {

        if (is_dir($value)) {
            continue;
        }

        $value = pathinfo($value, PATHINFO_FILENAME);
        if ($value != 'index') :
            $label = ucwords(trim(strtolower(str_replace(array('-', '_', '.'), ' ', preg_replace('/(?<![A-Z])[A-Z]/', ' \0', $value)))));
            ?>
            <li class="list-item col-xl-3 col-lg-4 col-md-6"><?= Html::a($label, ['reading', 'view' => $value]); ?></li>
                <?php
            endif;
        }
        ?>
</ul>

