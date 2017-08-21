<?php

/* @var $this yii\web\View */
/* @var $imgFile image to display */

//use Yii;
use yii\helpers\Html;

echo Html::style('.piImage {height:100%;width:100%;}');
echo Html::img($imgFile, ['class' => 'piImage']);
