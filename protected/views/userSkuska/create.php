<?php
/* @var $this UserSkuskaController */
/* @var $model UserSkuska */

$this->breadcrumbs=array(
	'User Skuskas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserSkuska', 'url'=>array('index')),
	array('label'=>'Manage UserSkuska', 'url'=>array('admin')),
);
?>

<h1>Create UserSkuska</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>