<?php
/* @var $this UserRozvrhController */
/* @var $model UserRozvrh */

$this->breadcrumbs=array(
	'User Rozvrhs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserRozvrh', 'url'=>array('index')),
	array('label'=>'Manage UserRozvrh', 'url'=>array('admin')),
);
?>

<h1>Create UserRozvrh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>