<?php
/* @var $this yii\web\View */
/* @var $ipModel Ips */
/* @var $networkModel Network */

$this->pageTitle = Yii::app()->name . ' - ADX Networks';
$this->breadcrumbs = array(
    'Engineering' => array('/engineering/index'),
    'ADX Networks' => array('/engineering/localNetwork'),
    $networkModel->name,
);
?>
<h1><?php echo CHtml::encode("{$networkModel->name} Network Segment") ?></h1>
<?php echo CHtml::link('Network Segment Information', '#netinfo'); ?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'ips-grid',
    'dataProvider' => $ipModel->search(),
    'filter' => $ipModel,
    'template' => "{summary}\n{pager}<br>\n{items}\n{pager}",
    'columns' => array(
        array(
            'name' => 'ip_address_search',
            'value' => '$data->ip_address_1 . "." . $data->ip_address_2 . "." . $data->ip_address_3 . "." . $data->ip_address_4',
            'filter' => false,
        ),
        array(
            'name' => 'host_type',
            'filter' => ZHtml::enumDropDownList($ipModel, 'host_type', array('prompt' => '&horbar; All &horbar;')),
        ),
        'host_name',
        array(
            'name' => 'host_purpose',
        //'filter' => false,
        //'sortable' => false,
        ),
        array(
            'name' => 'host_location',
        //'filter' => false,
        //'sortable' => false,
        ),
        array(
            'name' => 'public_access',
            'filter' => false,
            'sortable' => false,
        ),
        array(
            'name' => 'port_access_info',
            'filter' => false,
            'sortable' => false,
            'type' => 'html',
            'value' => 'nl2br($data->port_access_info)',
        ),
    ),
));
?>
<h2 id="netinfo">Network Segment Information</h2>
<ul>
    <li>Network: <?php echo $networkModel->subnet_id; ?></li>
    <li>Netmask: <?php echo $networkModel->subnet_mask; ?></li>
    <li>Gateway: <?php echo $networkModel->gateway; ?></li>
    <li>DHCP Range: <?php echo $networkModel->dhcp_range; ?></li>
    <?php if ($networkModel->vlan_id > 0): ?>
        <li>VLAN ID: <?php echo "{$networkModel->vlan_id} ({$networkModel->vlan_name})"; ?></li>
    <?php endif; ?>
</ul>
