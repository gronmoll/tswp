<?php
/* @var $this UserPredmetController */
/* @var $model UserPredmet */

$this->breadcrumbs=array(
	'User Predmets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserPredmet', 'url'=>array('index')),
	array('label'=>'Manage UserPredmet', 'url'=>array('admin')),
);
?>

<h1>Create UserPredmet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>