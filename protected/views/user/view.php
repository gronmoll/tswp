<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používatelia'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Aktualizovať používateľa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Zmazať používateľa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Správa používateľov', 'url'=>array('admin')),
);
?>

<h1>Detaily používateľa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titul',
		'meno',
		'priezvisko',
		'email',
		//'pass',
		'fakulta',
		'odbor',
		'type',
		'datum_vytvorenia',
	),
)); ?>
