<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používatelia'=>array('index'),
	'Nový',
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	array('label'=>'Správa používateľov', 'url'=>array('admin')),
);
?>

<h1>Nový užívateľ</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>