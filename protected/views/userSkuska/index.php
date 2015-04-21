<?php
/* @var $this UserSkuskaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Skuskas',
);

$this->menu=array(
	array('label'=>'Create UserSkuska', 'url'=>array('create')),
	array('label'=>'Manage UserSkuska', 'url'=>array('admin')),
);
?>

<h1>User Skuskas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
