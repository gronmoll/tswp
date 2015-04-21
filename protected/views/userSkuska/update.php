<?php
/* @var $this UserSkuskaController */
/* @var $model UserSkuska */

$this->breadcrumbs=array(
	'User Skuskas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserSkuska', 'url'=>array('index')),
	array('label'=>'Create UserSkuska', 'url'=>array('create')),
	array('label'=>'View UserSkuska', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserSkuska', 'url'=>array('admin')),
);
?>

<h1>Update UserSkuska <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>