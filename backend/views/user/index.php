<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \common\models\Department;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employees');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    Pjax::begin();
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'options' => ['style' => 'width:6em;'],
                'contentOptions' => ['class' => 'text-right'],
            ],
            //['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'first_name',
                'value' => 'profile.first_name',
            ],
            [
                'attribute' => 'last_name',
                'value' => 'profile.last_name',
            ],
            'email:email',
            'profile.cell_phone',
            'profile.home_phone',
            [
                'header' => 'Department',
                'attribute' => 'dept_id',
                'value' => 'profile.department.dept_name',
                'filter' => Html::activeDropDownList($searchModel, 'dept_id', Department::getDepartmentList(), ['class' => 'form-control', 'prompt' => 'All']
                ),
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
            ],
            [
                'class' => '\pheme\grid\ToggleColumn',
                'attribute' => 'is_active',
                'enableSorting' => false,
                'filter' => Html::activeDropDownList($searchModel, 'is_active', [1 => 'Active', 0 => 'Inactive'], ['class' => 'form-control', 'prompt' => 'All']
                ),
                'contentOptions' => ['class' => 'text-center'],
            // Uncomment if  you don't want AJAX
            //'enableAjax' => false,
            ],
        ],
    ]);
    Pjax::end();
    ?>
</div>
