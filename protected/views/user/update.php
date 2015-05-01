<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Používatelia'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editácia',
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Zobraziť používateľa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Správa používateĺov', 'url'=>array('admin')),
);
?>

<h1>Editovať používateľa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>