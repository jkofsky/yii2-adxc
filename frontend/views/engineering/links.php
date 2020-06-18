<?php
/* @var $this yii\web\View */
/* @var $model SupportLink */
/* $this->pageTitle - Set in Controller Action */
/* $this->breadcrumbs - Set in Controller Action */
Yii::$app->clientScript->registerScript('search', "
$('#search-form form').submit(function(){
	$('#links-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1><?php echo CHtml::encode(ucwords($this->action->id) . ' Contacts List'); ?></h1>

<div id="search-form">
    <div class="wide form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'action' => Yii::app()->createUrl($this->route),
            'method' => 'get',
        ));
        ?>
        <div class="row">
            <?php echo $form->label($model, 'company_name'); ?>
            <?php echo $form->textField($model, 'company_name'); ?>
            <?php echo CHtml::submitButton('Search'); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div><!-- form -->
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'links-grid',
    'dataProvider' => $model->search(),
    'filter' => null,
    'template' => "{summary}\n{pager}<br />\n{items}\n{pager}",
    'columns' => array(
        array(
            'name' => 'company_name',
            'type' => 'raw',
            'value' => '!empty($data->web_site) ? CHtml::link($data->company_name, $data->web_site, array("target"=>"_blank")) : $data->company_name',
        ),
        'phone_number',
        'fax',
        array(
            'header' => $model->getAttributeLabel('extra_info'),
            'type' => 'raw',
            'value' => 'nl2br($data->extra_info)',
        ),
    ),
//	'itemView'=>'_links',
));
?>
