<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Používatelia',
);

$this->menu=array(
	//array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Správa používateľov', 'url'=>array('admin')),
);
?>

<h1>Používatelia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
