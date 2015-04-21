<?php
/* @var $this UserRozvrhController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Rozvrhs',
);

$this->menu=array(
	array('label'=>'Create UserRozvrh', 'url'=>array('create')),
	array('label'=>'Manage UserRozvrh', 'url'=>array('admin')),
);
?>

<h1>User Rozvrhs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
