<?php
/* @var $this UserPredmetController */
/* @var $model UserPredmet */

$this->breadcrumbs=array(
	'User Predmets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserPredmet', 'url'=>array('index')),
	array('label'=>'Create UserPredmet', 'url'=>array('create')),
	array('label'=>'View UserPredmet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserPredmet', 'url'=>array('admin')),
);
?>

<h1>Update UserPredmet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>