<?php
/* @var $this UserPredmetController */
/* @var $model UserPredmet */

$this->breadcrumbs=array(
	'User Predmets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserPredmet', 'url'=>array('index')),
	array('label'=>'Create UserPredmet', 'url'=>array('create')),
	array('label'=>'Update UserPredmet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserPredmet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserPredmet', 'url'=>array('admin')),
);
?>

<h1>View UserPredmet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_predmet',
	),
)); ?>
