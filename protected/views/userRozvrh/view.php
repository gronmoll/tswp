<?php
/* @var $this UserRozvrhController */
/* @var $model UserRozvrh */

$this->breadcrumbs=array(
	'User Rozvrhs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserRozvrh', 'url'=>array('index')),
	array('label'=>'Create UserRozvrh', 'url'=>array('create')),
	array('label'=>'Update UserRozvrh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserRozvrh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserRozvrh', 'url'=>array('admin')),
);
?>

<h1>View UserRozvrh #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_termin_predmet',
	),
)); ?>
