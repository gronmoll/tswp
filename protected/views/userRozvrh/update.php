<?php
/* @var $this UserRozvrhController */
/* @var $model UserRozvrh */

$this->breadcrumbs=array(
	'User Rozvrhs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserRozvrh', 'url'=>array('index')),
	array('label'=>'Create UserRozvrh', 'url'=>array('create')),
	array('label'=>'View UserRozvrh', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserRozvrh', 'url'=>array('admin')),
);
?>

<h1>Update UserRozvrh <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>